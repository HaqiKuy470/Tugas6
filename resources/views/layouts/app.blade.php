<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Login Demo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar">
        <a href="{{ url('/') }}" class="brand-name">LOGIN DEMO</a>

        <div class="nav-right">
            <span>{{ auth()->user()->name }}</span>
            <span class="badge badge-{{ auth()->user()->role }}">
                {{ auth()->user()->role }}
            </span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light">Logout</button>
            </form>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
