<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Recipe $recipe)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->recipe_id = $recipe->id;
        $comment->save();

        return redirect()->route('recipes.show', $recipe)->with('success', 'Comment added successfully.');
    }
}


