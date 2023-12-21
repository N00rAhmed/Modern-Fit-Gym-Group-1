<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/trainer.css') }}">

    <title>Trainer</title>
</head>
<body>
      @extends('nav')
      @section('content')
    <main>
        <h1>Welcome Trainer</h1>

        <div class="cards">
            <div class="card"><a href="/viewDiary">View Members diary</a></div> 
            <div class="card"><a href="/regime">Workout</a></div> 
        </div>

    </main>

    </main>
    @include('footer')
    @endsection
</body>
</html>