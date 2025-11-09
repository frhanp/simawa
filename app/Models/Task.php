<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan (opsional jika nama tabel sudah sesuai konvensi)
    protected $table = 'tasks';

    // Field yang boleh diisi secara massal
    protected $fillable = [
        'jenis_penugasan',
        'assignment_type',
        'team_composition',
        'number_of_days',
        'status',
        'created_by',
        'supervisor_id',
        'rejection_reason',
        'is_berjenjang',

    ];

    public function pelaksanaan()
    {
        return $this->hasMany(Pelaksanaan::class);
    }

    // Relasi ke user yang membuat task
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relasi ke supervisor/sekretaris
    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }
    public function spt()
    {
        return $this->hasMany(Spt::class);
    }

    // Relasi ke Preparation
    public function preparations()
    {
        return $this->hasMany(Preparation::class);
    }

    // Relasi ke PKA
    public function pka()
    {
        return $this->hasMany(PKA::class);
    }

    // Relasi ke KM4
    public function km4()
    {
        return $this->hasMany(KM4::class);
    }

    
    /**
     * Relasi ke LHP. Sebuah tugas bisa memiliki satu LHP.
     */
    public function lhp()
    {
        return $this->hasOne(LHP::class);
    }

    /**
     * Scope untuk mengambil hanya tugas yang masih aktif.
     * Tugas dianggap aktif jika belum punya LHP, atau LHP-nya belum disetujui.
     */
    public function scopeActive($query)
    {
        return $query->where(function ($q) {
            $q->whereDoesntHave('lhp')
              ->orWhereHas('lhp', function ($subQ) {
                  $subQ->where('status', '!=', 'disetujui');
              });
        });
    }

    public function getProgressPercentageAttribute()
    {
        // 1. Perencanaan (10%)
        if (in_array($this->status, ['Ditolak Sekretaris', 'Ditolak Inspektur'])) {
            return 0; // Ditolak = 0%
        }
        $progress = 10; // Default (Pending, Disetujui Sekretaris)

        // 2. Persiapan (Tambah 10% -> Total 20%)
        // Kita perlu eager load 'spt.preparation'
        if ($this->spt->isEmpty()) {
            return $progress; // Belum ada SPT, masih 10%
        }

        $persiapanDiterima = $this->spt->contains(function ($spt) {
            return $spt->preparation && $spt->preparation->status === 'Diterima';
        });

        if (!$persiapanDiterima) {
            // Jika status 'Disetujui Inspektur' tapi persiapan belum 'Diterima'
            if ($this->status === 'Disetujui Inspektur') {
                return 20; // Tahap Persiapan (Menunggu Persetujuan/Ditolak)
            }
            return $progress; // Tetap 10%
        }
        $progress = 20; // Persiapan Diterima

        // 3. Pelaksanaan (Tambah 60% -> Total 80%)
        // Kita perlu eager load 'pelaksanaan'
        $pelaksanaanSelesai = $this->pelaksanaan->contains(function ($pelaksanaan) {
            return $pelaksanaan->berita_acara_exit !== null;
        });

        if (!$pelaksanaanSelesai) {
            return $progress; // Berhenti di 20% (karena 80% hanya jika pelaksanaan selesai)
        }
        $progress = 80;

        // 4. LHP (Tambah 20% -> Total 100%)
        // Kita perlu eager load 'lhp'
        if ($this->lhp && $this->lhp->status === 'disetujui') {
            $progress = 100;
        }
        
        return $progress;
    }
    
}
