<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'birthdate',
        'emailaddress',
        'password',
    ];

    // Hide the attributes that should not be visible in arrays
  
}