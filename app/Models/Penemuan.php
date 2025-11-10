<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penemuan extends Model
{
    use HasFactory;

    protected $table = 'penemuans';

    protected $fillable = [
        'lhp_id',
        'judul_penemuan',
        'kondisi',
        'kriteria',
        'penyebab_kategori',
        'penyebab_deskripsi',
        'akibat_kategori',
        'akibat_deskripsi',
        'rekomendasi_kategori',
        'rekomendasi_deskripsi',
    ];

    /**
     * Relasi ke LHP (Temuan ini dimiliki oleh LHP mana).
     */
    public function lhp()
    {
        return $this->belongsTo(LHP::class);
    }
}
