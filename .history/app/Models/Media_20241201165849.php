<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'Media';

    protected $fillable = ['title', 'author', 'description', 'image', 'publish_date', ];
}
