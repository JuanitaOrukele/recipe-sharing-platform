<?php

public function store(Request $request, Recipe $recipe)
{
    $request->validate([
        'content' => 'required',
    ]);

    // Check if user is logged in using your session data
    if (!$request->session()->has('user_id')) {
        return redirect('/login')->with('error', 'Please log in to comment.');
    }

    $comment = Comment::create([
        'content' => $request->content,
        'recipe_id' => $recipe->id,
        'user_id' => $request->session()->get('user_id'),
    ]);

    return redirect()->route('recipes.show', $recipe)->with('success', 'Comment added successfully.');
}