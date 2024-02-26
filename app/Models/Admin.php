<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Admin extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    // protected $table = 'admins';
    public $timestamp = true;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'city',
        'state',
        'zipcode',
        'address',
        'password',
        'pin',
        'email_verified_at',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'pin' => 'hashed'
    ];
    public function passwordLog()
    {
        // return $this->hasOne(PasswordLog::class,'id')
        return $this->morphOne(PasswordLog::class, 'passwordLog', 'type', 'user_id', 'id');
    }
}
