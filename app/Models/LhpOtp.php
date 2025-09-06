<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LhpOtp extends Model
{
    use HasFactory;
    protected $table = 'lhp_otps';
    protected $fillable = [
        'lhp_id',
        'user_id',
        'otp_code',
        'expires_at',
    ];
    
    public function lhp()
    {
        return $this->belongsTo(Lhp::class);
    }
    
    public function user()
    
    {
        return $this->belongsTo(User::class);
    }
}
