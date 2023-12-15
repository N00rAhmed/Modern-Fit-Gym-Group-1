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
    <form action="workout_process.php" method="post">
        <table class="table">
            <caption>Workout</caption>
            <tr>
                <th>Member ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <tr>

                @if(is_array($data) || is_object($data))
        @foreach ($data as $data1)
        @if(is_array($data) || is_object($data))
                @foreach ($data as $data1)
                <tr>
                <td>
                    {{ $data1->Member_ID }}</td>
                    <td>{{ $data1->Exercise_Name }}</td>
                    <td>{{ $data1->Excercise_Type }}</td>
                    <td>{{ $data1->Description }}</td>
                    <td>{{ $data1->Amount }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8">No data available</td>
                </tr>
                @endif
            </tbody>
        </table>
                    </form>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="8">No data available</td>
        </tr>
    @endif


            </tr>
        </table>
    </form>
</div>

    </div>
    </div>
    </main>

    <footer>


    @endsection
    </footer>
</body>
</html>