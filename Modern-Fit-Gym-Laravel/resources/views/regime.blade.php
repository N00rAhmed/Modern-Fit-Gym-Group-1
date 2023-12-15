<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/regime.css') }}">

    <title>Regime</title>
</head>
<body>
    @extends('nav')
    @section('content')

    <main>
        <h1>Regime</h1>

        <div class="input">
    <fieldset>
        <legend>Add Workout</legend>
        <form action="{{ route('workout.submit') }}" method="post" class="input-row">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="input-fields">
        <input type="text" name="id" id="id" placeholder="Member ID" />
            <input type="text" name="exercise_name" id="exercise_name" placeholder="Name" />
            <input type="text" name="exercise_type" id="exercise_type" placeholder="Type" />
            <input type="text" name="description" id="description" placeholder="Description" />
            <input type="text" name="amount" id="amount" placeholder="Amount" />
            </div>
            <button type="submit" class="coloured-button">Create Workout</button>
        </form>
    </fieldset>
</div>

    <table>
            <thead>
            <tr>
            <th>Workout_ID</th>
                    <th>Staff_ID</th>
                    <th>Member_ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
                        <tbody>
                @if(is_array($data) || is_object($data))
                @foreach ($data as $data1)
                <tr>
                    <td>{{ $data1->Workout_ID }}</td>
                    <td>{{ $data1->Staff_ID }}</td>
                    <td>{{ $data1->Member_ID }}</td>
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

    </main>

    <footer>
    @include('footer')
  @endsection
    </footer>
</body>
</html>