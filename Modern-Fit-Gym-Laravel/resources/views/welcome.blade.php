<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/index.css') }}">


    <title>Modern Fit Gym</title>
</head>
<body>
    <!-- <header>
        <nav>
            <img class="navbar-logo" src="{{ asset('Images/logo.png') }}" height="100px" width="100px" />

            <h2>Modern FIT Gym Home Page</h2>
            <a href="/">Home</a>
            <a href="/login">Login</a>
            <a href="/contact">Contact</a>
        </nav>
    </header> -->
    @extends('nav')
    @section('content')

    <main>
        <div class="welcome">
            <h1><strong>Welcome to Modern Fit Gym etc!</strong></h1>
        </div>
        <div class="container">
            <div class="info">
                <h2><strong>What we are About</strong></h2>
                <p>ModernFit Gym is based in sheffield. We have an array of facilities and seasoned specialists offering nutritional and workout guidance.<br> We are a gym who used to be local and now have started to expand across United Kingdom.</p>
            </div>
            <div class="info">
                <h2><strong>Register</strong></h2>
                <p>Register with us if you havent yet! Monthly memberships which contain your own trainer to assist your journey, through nutritional and physcial advice. They will be able to give personalised regimes just for your goals, and you will be able to keep track of your progress with our easy to use website.
                </p>
                <a href="/register"><button id="register">Register</button></a>
            </div>
        </div>
        
        <div class="facility">
        <h2><strong>Facilities</strong></h2>
     <p>Where cutting-edge meets fitness excellence. Our facility is meticulously designed to offer a contemporary and invigorating fitness experience, featuring:</p>

     <div id="mz-gallery" class="clearfix">
        <div id="mz-gallery">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="{{ asset('../Images/Slide1.jpg' ) }}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                        <a target="_blank" href="img_forest.jpg">
                            <img src="{{ asset('../Images/Slide2.jpg' ) }}" alt="Forest" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                        <a target="_blank" href="img_lights.jpg">
                            <img src="{{ asset('../Images/Slide3.jpg' ) }}" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                        <a target="_blank" href="img_mountains.jpg">
                            <img src="{{ asset('../Images/Slide4.jpg' ) }}" alt="Mountains" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
            </div>
        </div>

     </div>

     <div class="policy">
     <h2><strong>Our Policy</strong></h2>
        
        <p>
            <strong>1. Membership:</strong>
            <br>
            1.1 Registration: All members must complete the registration process and provide accurate and up-to-date personal information.
            <br>
            1.2 Age Requirement: Members must be at least 16 years old. Minors aged 16-17 require parental or guardian consent.
        </p>

        <p>
            <strong>2. Facility Use:</strong>
            <br>
            2.1 Hours of Operation: Our gym is open seven days a week from 6:00 AM to 10:00 PM. Any changes to operating hours will be communicated in advance.
            <br>
            2.2 Attire: Proper workout attire, including athletic shoes, is required at all times. Please refrain from wearing offensive or inappropriate clothing.
        </p>
     </div>
    </main>


</main>


    <footer>
        <p>&copy; 2023 Modern Fit Gym. All rights reserved.</p>
        <a href="/contact">Contact Us</a>
    </footer>
    @endsection

</body>


</html>