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
        'assignment_type',
        'team_composition',
        'number_of_days',
        'status',
        'created_by',
        'supervisor_id',
        'rejection_reason',

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

    // Relasi ke EntryMeeting
    
}
