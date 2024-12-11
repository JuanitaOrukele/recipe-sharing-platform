<?php
@extends('layouts.app')

@section('title', 'Create Recipe')

@section('content')
    <h1>Create a New Recipe</h1>
    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
