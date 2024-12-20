<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'admin'; // استخدام Guard منفصل للـ admins

    protected $fillable = [
        'name', 'email', 'password', 'is_super_admin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    
}