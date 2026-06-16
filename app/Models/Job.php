<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
    'title',
    'image',
    'location',
    'description',
    'requirements',
    'status',
];

    public function applications() {
        return $this->hasMany(JobApplication::class);
    }
}
