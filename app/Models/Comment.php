<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'recipe_id',
        'content',
        'user_name',
    ];

    // Define the relationship with recipes
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
