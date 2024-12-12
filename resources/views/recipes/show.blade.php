@extends('layouts.app')

@section('title', $recipe->title)

@section('content')
    <h1>{{ $recipe->title }}</h1>
    <p>{{ $recipe->description }}</p>

    @if ($recipe->image)
        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" style="max-width: 100%;">
    @else
        <p>No image available</p>
    @endif

    <a href="{{ route('recipes.edit', $recipe) }}">Edit</a>
    <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <h2>Comments</h2>
    <ul>
        @foreach ($recipe->comments as $comment)
            <li>{{ $comment->content }} - by {{ $comment->user->username }}</li>
        @endforeach
    </ul>

    <h3>Add a Comment</h3>
    <form action="{{ route('comments.store', $recipe) }}" method="POST">
        @csrf
        <textarea name="content" required></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection