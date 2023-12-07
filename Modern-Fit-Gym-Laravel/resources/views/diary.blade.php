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
    <header>
        <nav>
            <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" />
            <h1>My Diary</h1>
            <a href="/member">Go back</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <main>
        <h2>Diary Entry</h2>
        <div class="input">
        <input type="text" placeholder="Date" />
        <input type="text" placeholder="Calorie Intake"/>
        <input type="text" placeholder="Supplement Intake"/>
        <input type="text" placeholder="Exercise Duration"/>
        <input type="text" placeholder="Calorie Intake"/>
        <input type="text" placeholder="Daily Duration"/>
        <input type="text" placeholder="Notes"/>
        </div>
        <br />
        <div class="buttons">
        <button>Add</button>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>