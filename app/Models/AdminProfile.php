<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminProfile extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'name',
        'user_id',
        'remember_token',
        'email',
        'created_at',
        'password',
    ];

    protected $hidden = [
        'password',
        
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
