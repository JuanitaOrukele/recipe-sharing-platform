<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    // Define the relationship with comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
