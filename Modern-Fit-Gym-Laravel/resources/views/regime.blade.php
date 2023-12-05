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
        <input placeholder="name" />
        <input placeholder="weight" />
        <input placeholder="calorie amount" />
        <input placeholder="fat" />
        <input placeholder="sugar" />
        <input placeholder="vitamins" />
        <button>Create Nutrition</button>

        <h2>Workout Plan</h2>
        <input placeholder="exercise name" />
        <input placeholder="exercise type" />
        <input placeholder="description" />
        <input placeholder="amount" />
        <button>Create Workout</button>
    </main>

    <footer>

    </footer>
</body>
</html>