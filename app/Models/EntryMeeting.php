<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryMeeting extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'entry_meetings';

    // Mass assignable attributes
    protected $fillable = [
        'task_id',
        'agenda',
        'tanggal',
    ];

    // Relasi ke tabel Task (Tugas)
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
