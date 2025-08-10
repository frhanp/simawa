<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LHP extends Model
{
    use HasFactory;
    protected $table = 'lhp';
    protected $fillable = [
        'task_id',
        'lhp_file',
        'keterangan',
        'status',
        'reason',
    ];

    /**
     * Relasi dengan Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
