<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Your App</title>
    <!-- Include your CSS, JavaScript, and other head elements here -->
    <link rel="stylesheet" href="{{ asset('../css/nav.css') }}">

</head>
<body>
<header>
        <nav>
            <!-- <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" /> -->
            <img class="navbar-logo" src="{{ asset('Images/logo.png') }}" height="100px" width="100px" />

            <h2>Modern FIT Gym Home Page</h2>
            <a href="/">Home</a>
            <a href="/login">Login</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <!-- Content Section -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Include your JavaScript, footer, or any other common elements here -->
</body>
</html>
