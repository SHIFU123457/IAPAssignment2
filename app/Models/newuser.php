<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newuser extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'username',
        'password',
        'dob',
        'location',
        'email',
        'gender'
    ];
}
