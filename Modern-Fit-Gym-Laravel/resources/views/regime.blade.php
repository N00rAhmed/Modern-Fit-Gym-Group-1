<!DOCTYPE html>
<html lang="en">
<head>

<style>
table {
    
  font-family: arial, sans-serif;
  /* border-collapse: collapse;
  width: 100%; */
}

td, th {

  border: 1px solid #000000;
  /* text-align: left;
  padding: 8px; */
}

tr:nth-child(even) {

  /* background-color: #dddddd; */
}
</style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/regime.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/regime.css') }}">

    <title>Regime</title>
</head>
<body>
@extends('nav')
    @section('content')

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


<!-- Your existing table structure -->
<!-- Your existing table structure -->
<table>
  <!-- ... -->
  <tbody>
    @if(is_array($data) || is_object($data))
        @foreach ($data as $data1)
            <!-- Edit form -->
            <tr>
                <td colspan="8">
                    <form action="{{ route('workout.update', ['workoutID' => $data1->Workout_ID]) }}" method="post">
                        @csrf
                        <!-- Input fields for editing -->
                        <input type="text" name="exercise_name" value="{{ $data1->Exercise_Name }}" />
                        <input type="text" name="exercise_type" value="{{ $data1->Excercise_Type }}" />
                        <input type="text" name="description" value="{{ $data1->Description }}" />
                        <input type="text" name="amount" value="{{ $data1->Amount }}" />
                        <button type="submit">Update</button>
                    </form>
                </td>
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

    </footer>
    @endsection
</body>
</html>