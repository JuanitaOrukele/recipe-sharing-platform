@extends('layouts.app')

@section('title', 'Create Recipe')

@section('content')
    <h1>Create a New Recipe</h1>
    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="image">Image (optional):</label>
        <input type="file" id="image" name="image" accept="image/*">
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
