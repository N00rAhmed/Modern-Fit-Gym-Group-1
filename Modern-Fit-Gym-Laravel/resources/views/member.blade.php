<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/member.css') }}">
    <title>Member Page</title>
</head>
<body>
@extends('nav')
    @section('content')

    <main>
        <h1>Welcome Member</h1>
        <div class="cards">

            <div class="card"><a href="/diary">Go to My diary</a></div> 
            <div class="card"><a href="/workout">View My Workout plan</a></div>
            <div class="card"><a href="/nutritional">Nutritional Information</a></div>
            <div class="card"><a href="/plan">View my Nutritional Plan</a></div>

        </div>

    </main>

    <footer>

    </footer>

    <?php
    $value = session()->get('MID');
    var_dump($value);
    ?>

    @endsection 

</body>
</html>