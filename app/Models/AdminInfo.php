<?php
// app/Models/AdminInfo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminInfo extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $guard = 'admin';
    protected $table = 'admin'; // Assuming your table is named 'admin'
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
