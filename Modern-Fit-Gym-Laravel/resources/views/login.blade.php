<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../Styles/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/index.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/login.css') }}">

    <title>Login</title>
</head>
<body>
    <!-- <header>
      <nav>
        <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" />
        <h2>Modern FIT Gym Home Page</h2>
        <a href="./index.html">Home</a>
        <a href="./login.html">Login</a>
        <a href="./contact.html">Contact</a>
      <script src="path/to/script.js"></script>
      </nav>
    </header> -->

    @extends('nav')
    @section('content')


    <main>
  <div class="subtitle">
      <h1>Login</h1>
  </div>
  <fieldset>
      <div class="input">
        <input type="text" placeholder="username PIN" />
      <br />
        <input type="text" placeholder="USER CREATED password" />
      </div>
      <br />
      <div class="button">
        <a href="/member"><button>login</button></a>
    </div> 
    <div class="button2">
        <a href="/register">Register</a>
      </div>
  </fieldset>
    </main>

    <footer>

    </footer>

    @endsection


  </body>
</html>
