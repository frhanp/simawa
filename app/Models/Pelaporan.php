<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $table = 'pelaporans';

    protected $fillable = [
        'task_id',
        'km8',
        'km10',
        'kertas_kerja_at',
        'konsep_lhp',
        'expose_pelaporan',
        'tanggal_expose', // Tambahkan ini
        'status',
        'alasan_tolak',
    ];
    

    /**
     * Relasi dengan Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
