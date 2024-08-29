<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    use HasFactory;
    protected $table = 'register_users';

    // The attributes that are mass assignable
    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'birthdate', 'emailaddress', 'password',
    ];

    // The attributes that should be hidden for arrays
    protected $hidden = [
        'password',
    ];
}
