<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/workout.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/workout.css') }}">

    <title>Exercise Plan</title>
</head>
<body>
    @extends('nav')
    @section('content')

    <main>
    <div class="table-container">
        <!-- <div class="table-with-search">
            <table class="Form">
                <caption>Form</caption>
                <tr>
                    <th>Header</th>
                </tr>
            </table>
        </div> -->
        <fieldset>
        <legend>Form</legend>
        <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter member ID" required/>
        </div>
        <br>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required/>
        </div>
        <br>
        </fieldset>

        <div class="table-with-search">
            <table class="table">
                <caption>Workout</caption>
                <tr>
                    <th>Workout ID</th>
                    <th>Staff ID</th>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                    <td>Data 4</td>
                    <td>Data 5</td>
                    <td>Data 6</td>
                    <td>Data 6</td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>

        <div class="table-with-search">
            <div class="search-container">
                <input type="text" id="searchBar" name="searchBar" placeholder="Search Members">
            </div>
            <table class="table">
                <caption>Members</caption>
                <tr>
                    <th>Member_ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                </tr>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>
    </div>
    </div>
    </main>

    <footer>


    @endsection
    </footer>
</body>
</html>