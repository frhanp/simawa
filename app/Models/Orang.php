<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    protected $table = 'orang'; // Gunakan nama tabel yang sesuai
    protected $fillable = ['nama', 'jabatan'];
}
