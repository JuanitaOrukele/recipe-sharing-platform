
@extends('layouts.app')

@section('title', 'All Recipes')

@section('content')
    <h1>Recipes</h1>
    <a href="{{ route('recipes.create') }}">Create Recipe</a>
    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <a href="{{ route('recipes.show', $recipe) }}">{{ $recipe->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
