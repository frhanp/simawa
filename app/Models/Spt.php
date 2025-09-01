<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spt extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan
    protected $table = 'spt';

    // Izinkan pengisian massal pada kolom berikut
    protected $fillable = [
        'task_id',
        'file_name',  // Nama file yang diunggah
        'file_path',  // Path file di disk
        'uploaded_by',  // ID user yang mengunggah file
    ];

    // Relasi ke task (jika ada)
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function preparation()
    {
        return $this->hasOne(Preparation::class);
    }

    public function pelaksanaan()
    {
        return $this->hasMany(Pelaksanaan::class);
    }
}
