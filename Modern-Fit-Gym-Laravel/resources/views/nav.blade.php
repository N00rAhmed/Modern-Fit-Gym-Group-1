<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Your App</title>
    <!-- Include your CSS, JavaScript, and other head elements here -->
    <link rel="stylesheet" href="{{ asset('../css/nav.css') }}">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto">

</head>
<body>
<!--<header> og and works
        <nav> -->
            <!-- <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" /> -->
            <!--<a href="/"><img class="navbar-logo" src="{{ asset('Images/Image2.png') }}" height="100px" width="100px"/></a>

            <h2 class="header">Modern Fit Gym</h2>
            
            <a href="/" class="navMenu">Home</a>
            <a href="/nutritional" class="navMenu">Nutritional</a>
            <a href="/login" class="navMenu">Login</a>
            <a href="/contact" class="navMenu">Contact</a>
        </nav>
</header>  -->

<header> 
        <nav> 
            <!-- <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" /> -->
            <a href="/"><img class="navbar-logo" src="{{ asset('Images/Image2.png') }}" height="100px" width="100px"/></a>

            <h2 class="header">Modern Fit Gym</h2>
            <div class="navList">
            <a href="/" class="navMenu">Home</a>
            <a href="/nutritional" class="navMenu">Nutritional</a>
            <a href="/login" class="navMenu">Login</a>
            <a href="/contact" class="navMenu">Contact</a>
            </div>
        </nav>
</header> 


    <!-- Content Section -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Include your JavaScript, footer, or any other common elements here -->
</body>
</html>
