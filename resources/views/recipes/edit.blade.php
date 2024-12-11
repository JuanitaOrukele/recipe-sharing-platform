
@extends('layouts.app')

@section('title', 'Edit Recipe')

@section('content')
    <h1>Edit Recipe</h1>
    <form action="{{ route('recipes.update', $recipe) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $recipe->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $recipe->description }}</textarea>
        <br>
        <button type="submit">Save Changes</button>
    </form>
@endsection
