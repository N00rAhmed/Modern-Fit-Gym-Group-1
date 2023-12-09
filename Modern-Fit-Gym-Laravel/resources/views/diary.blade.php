<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/diary.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/diary.css') }}">

    <title>My diary</title>
</head>
<body>
@extends('nav')
    @section('content')

    <main>
        <h2>Diary Entry</h2>
        <div class="input">
            <!-- <form action="/save-diary" method="post"> -->

                <input type="text" name="date" placeholder="Date" />
                <input type="text" name="CalorieIntake" placeholder="Calorie Intake"/>
                <input type="text" name="SupplementIntake" placeholder="Supplement Intake"/>
                <input type="text" name="Excercise" placeholder="Exercise"/>
                <input type="text" name="CalorieIntake" placeholder="Calorie Intake"/>
                <input type="text" name="DailyDuration" placeholder="Daily Duration"/>
                <input type="text" name="Notes" placeholder="Notes"/>
        </div>
        <br />
        <div class="buttons">
            <button type="submit">Add</button>
            <!-- </form> -->

        </div>

        @foreach ($data as $data1)
        {{ $data1 -> Date}}
        @endforeach


    </main>

    <footer>

    </footer>
    @endsection 
</body>
</html>