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
            <ul>
                @if (!session()->has('user_id'))
                    <li><a href="{{ route('register') }}">Sign Up</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li>Welcome back, {{ session('username') }}</li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
            </ul>
        </nav>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Add this block for displaying errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2024 Recipe Sharing Platform</p>
    </footer>
</body>
</html>