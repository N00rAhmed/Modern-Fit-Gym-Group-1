<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Your App</title>
    <!-- Include your CSS, JavaScript, and other head elements here -->
    <link rel="stylesheet" href="<?php echo e(asset('../css/nav.css')); ?>">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto">

</head>
<body>
<!--<header> og and works
        <nav> -->
            <!-- <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" /> -->
            <!--<a href="/"><img class="navbar-logo" src="<?php echo e(asset('Images/Image2.png')); ?>" height="100px" width="100px"/></a>

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
            <a href="/"><img class="navbar-logo" src="<?php echo e(asset('Images/Image2.png')); ?>" height="100px" width="100px"/></a>

            <h2 class="header">Modern Fit Gym</h2>
            <div class="navList">
            <a href="/" class="navMenu">Home</a>
            <a href="/nutritional" class="navMenu">Nutritional</a>
            <a href="/login" class="navMenu">Login</a>
            <a href="/contact" class="navMenu">Contact</a>
            <a href="/" class="navMenu" id="logout">Logout</a>
            </div>
        </nav>
</header> 


    <!-- Content Section -->
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Include your JavaScript, footer, or any other common elements here -->
</body>
</html>
<?php /**PATH C:\Users\noora\OneDrive\Desktop\LARAVEL\Modern-Fit-Gym\Modern-Fit-Gym-Laravel\resources\views/nav.blade.php ENDPATH**/ ?>