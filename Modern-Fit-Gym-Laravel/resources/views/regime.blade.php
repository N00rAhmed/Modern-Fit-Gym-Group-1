<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/regime.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/regime.css') }}">

    <title>Regime</title>
</head>
<body>
    <header>
        <nav>
            <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" />
            <h2>Modern FIT Gym Trainer Page</h2>
            <a href="/trainer">Trainer Home</a>
            <a href="/viewDiary">View Diary</a>
            <a href="/regime">Regime (crud functionality)</a>
        </nav>
    </header>

    <main>
        <h1>Yo Trainer this is Regime (CRUD Operation)</h1>

        <h2>Regime Nutritional Plan + Exercise Plan</h2>
        <p>make nutrion plan be on left side and excerise plan be on right side. try not to make it in columns</p>

        <h2>Nutritional Plan</h2>


            <input type="text" name="name" id="name" placeholder="name" />
            <input type="text" name="weight" id="weight" placeholder="weight" />
            <input type="text" name="calorie_amount" id="calorie_amount" placeholder="calorie amount" />
            <input type="text" name="fat" id="fat" placeholder="fat" />
            <input type="text" name="sugar" id="sugar" placeholder="sugar" />
            <input type="text" name="vitamins" id="vitamins" placeholder="vitamins" />
            <button type="submit">Create Nutrition</button>

        <h2>Workout Plan</h2>
        <form action="{{ route('workout.submit') }}" method="post">
            @csrf <!-- {{ csrf_field() }} -->

            <input type="text" name="exercise_name" id="exercise_name" placeholder="exercise name" />
            <input type="text" name="exercise_type" id="exercise_type" placeholder="exercise type" />
            <input type="text" name="description" id="description" placeholder="description" />
            <input type="text" name="amount" id="amount" placeholder="amount" />
            <button type="submit">Create Workout</button>
        </form>

    </main>

    <footer>

    </footer>
</body>
</html>