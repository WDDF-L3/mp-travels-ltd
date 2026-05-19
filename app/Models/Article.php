<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'category',
        'author',
        'title',
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