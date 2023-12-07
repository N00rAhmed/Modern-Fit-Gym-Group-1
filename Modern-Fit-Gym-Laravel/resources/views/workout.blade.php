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
        <div class="table-with-search">
            <table class="Form">
                <caption>Form</caption>
                <tr>

            </table>
        </div>

        <div class="table-with-search">
            <table class="table">
                <caption>Table 2</caption>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
                </tr>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>

        <div class="table-with-search">
            <div class="search-container">
                <input type="text" id="searchBar" name="searchBar" placeholder="Search Table 3">
            </div>
            <table class="table">
                <caption>Table 3</caption>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
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