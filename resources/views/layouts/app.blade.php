<?php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Sharing Platform</title>
</head>
<body>
    <header>
        <h1>Recipe Sharing Platform</h1>
        <nav>
            <a href="{{ route('recipes.index') }}">Home</a>
            <a href="{{ route('recipes.create') }}">Create Recipe</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Recipe Sharing Platform</p>
    </footer>
</body>
</html>
