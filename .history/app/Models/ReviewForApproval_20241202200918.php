<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewForApproval extends Model
{
    use HasFactory;

    

    public $timestamps = false;

    protected $table = 'reviews_need_approval';

    protected $fillable = ['user_id', 'media_id', 'rating', 'review', 'published_on'];
}
