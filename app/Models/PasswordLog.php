<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordLog extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $fillable = [
        'type',
        'user_id',
        'password',
        'pin',
        'change_log',
    ];
}
