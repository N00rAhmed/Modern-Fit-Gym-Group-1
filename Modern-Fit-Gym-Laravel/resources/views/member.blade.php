<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/member.css"> -->
    <!-- <link rel="stylesheet" href="../Styles/staff.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/member.css') }}">

    <title>Member Page</title>
</head>
<body>
@extends('nav')
    @section('content')
    
    <main>
        <h1>Welcome Member</h1>
        <div class="cards">

            <div class="card1"><a href="/diary">Go to My diary</a></div> 

            <div class="card3"><a href="/workout">View My Workout plan</a></div>
            
            <div class="card2"><a href="/nutritional">Nutritional Information</a></div>

            <div class="card4"><a href="/plan">View my Nutritional Plan</a></div>
            
        </div>

        <!-- <div class="regime-container">
            <div class="member-regime">
                <h2>View my Regime</h2>

            </div>
        </div>

        <div class="diary-container">
            <h2>My Diary</h2>
        </div>

        <div class="nutrion-container">
            <h2>Nutrional Information</h2>
        </div> -->
    </main>

    <footer>

    </footer>

    <?php
    $value = session()->get('ID');
    var_dump($value)
    ?>

    @endsection 
</body>
</html>