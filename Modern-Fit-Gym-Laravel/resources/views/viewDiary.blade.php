<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/viewdiary.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/viewdiary.css') }}">

    <title>View Diary</title>
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
        <h1>Yo trainer you can View Diary of member here</h1>
        <h2>Diary</h2>

        <div class="diary-container">
            Diary Information of Member View

            <ul>
                <li>Member_ID</li>
                <li>Date</li>
                <li>Calorie Intake</li>
                <li>Supplement Intake</li>
                <li>Exercises</li>
                <li>Daily Duration</li>
                <li>Notes</li>
            </ul>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>