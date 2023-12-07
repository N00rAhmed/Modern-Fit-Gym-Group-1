<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/register.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/register.css') }}">

    <title>Register</title>
</head>
<body>
  <header>
    <!-- <nav>
      <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" />
      <h2>ModernFIT Gym Register</h2>
      <a href="./index.html">Home</a>
      <a href="./login.html">Login</a>
      <a href="./contact.html">Contact</a>
    </nav>
  </header> -->
  <!-- <div class="navigation">
      <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" />
      <h1>ModernFit Gym Register</h1>
      <a href="./index.html">Home</a>
      <a href="./login.html">Login</a>
      <a href="./contact.html">Contact</a>
  
  </div> -->
  @extends('nav')
  @section('content')

  <main>
    <h1>Register</h1>
    <fieldset>
    <form action="{{ route('register.submit') }}" method="POST">
    @csrf <!-- Add CSRF token for security -->
    <!-- Your form inputs -->

      <div class="input">
        <input type="text" name="firstname" placeholder="Firstname" required/>
        <input type="text" name="lastname" placeholder="Lastname" required/>
        <input type="date" name="dob" placeholder="DOB" required/>
        <input type="text" name="address" placeholder="Address" required/>
        <input type="text" name="phone" placeholder="Phone Number" required/>
        <input type="email" name="email" placeholder="Email" required/>
        <input type="text" name="credit_details" placeholder="Credit Details" required/>
        <!-- <input type="password" name="pin" placeholder="Pin" required/> pin will be generated for user and sent to their email which will be used for their login -->
        <input type="password" name="password" placeholder="password" required/>
        
        <!-- for diary sending and getting data we can maybe use ceaser cipher to encrypt data omin sql db and then decrypt when getting data -->
         <!--or we can just use normal php encryption  -->
         <!-- sqlite injection resistence potentially for security -->
         <!-- later on may need to write documentation for someone else to use it locally -->
         
      </div>
      <br />
      <div class="regbttn">
        <button type="submit">Register</button>

      </div>
    </fieldset>
    </form>
  </main>

  <footer>

  </footer>




  @endsection


</body>
</html>
