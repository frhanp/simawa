<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksanaan extends Model
{
    use HasFactory;

    protected $table = 'pelaksanaan';

    protected $fillable = [
        'task_id',
        'entry_meeting_photo',
        'berita_acara_entry',
        'exit_meeting_photo',
        'berita_acara_exit',
    ];

    /**
     * Relasi dengan model Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
