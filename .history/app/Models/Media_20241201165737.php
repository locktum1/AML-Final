<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'Users';

    protected $fillable = ['name', 'email', 'password', 'dob'];
}
