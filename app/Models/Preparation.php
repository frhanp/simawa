<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{
    use HasFactory;

    protected $table = 'preparations';
    protected $fillable = [
        'spt_id',
        'pka_path',
        'formulir_km4_path',
        'status',
        'note',
    ];

    /**
     * Relasi ke model Spt.
     */
    public function spt()
    {
        return $this->belongsTo(Spt::class);
    }
}
