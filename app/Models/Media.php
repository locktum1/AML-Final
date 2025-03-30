<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $table = 'Media';

    public $timestamps = false;

    protected $fillable = ['title', 'author', 'description', 'image', 'publish_date', 'media_type'];

    public function reviews(){
        return $this->hasMany(ReviewForApproval::class, 'media_id');
    }
}
