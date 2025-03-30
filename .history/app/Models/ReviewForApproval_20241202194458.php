<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewForApproval extends Model
{
    use HasFactory;

    // Specify the table if the name doesn't match Laravel's naming conventions
    protected $table = 'reviews';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'media_id',
        'user_id',
        'content',
    ];
}
