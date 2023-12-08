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
        @foreach($diaryData as $entry)
            <p>Date: {{ $entry->Date }}</p>
            <p>Calorie Intake: {{ $entry->CalorieIntake }}</p>
            <!-- Display other fields similarly -->
        @endforeach


    </main>

    <footer>

    </footer>
</body>
</html>