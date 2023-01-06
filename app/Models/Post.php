<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Add the fillable fields
    protected $fillable = ['title', 'post_text', 'category_id'];
}
