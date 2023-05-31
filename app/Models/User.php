<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
//use Spatie\Permission\Models\Role;
//use Spatie\Permission\Models\Permission;

class User extends Authenticatable
{
    use HasApiTokens, HasRoles, HasFactory, Notifiable;

    public $guard_name = 'web';

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'phone', 'email', 'email_verified_at', 'image', 'street', 'street2', 'city', 'state', 'area', 'dob', 'created_at', 'updated_at', 'deleted_by', 'deleted_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
