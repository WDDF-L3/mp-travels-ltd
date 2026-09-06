<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category',
        'author',
        'title',
        'image',
        'slug',
        'description',
        'facebook',
        'instagram',
        'pinterest',
        'twitter',
        'website',
        'status',
    ];
}