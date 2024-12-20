@extends('layouts.app')

@section('title', 'All Recipes')

@section('content')
    <h1>Recipes</h1>
    <a href="{{ route('recipes.create') }}">Create Recip4e</a>
    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <a href="{{ route('recipes.show', $recipe) }}">{{ $recipe->title }}</a> - by {{ optional($recipe->user)->username ?? 'Unknown User' }}
            </li>
        @endforeach
    </ul>
@endsection
