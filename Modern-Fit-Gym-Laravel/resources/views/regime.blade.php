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
        <legend>Workout</legend>
        <form action="{{ route('workout.submit') }}" method="post" class="input-row">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="input-fields">
            <?php
            $value = session()->get('SID');
            if (isset($value)){
              echo "<input class='hide' type='text' name='id' id='id' value='" . $value . "'>";
            }
            ?>
            <input type="text" name="id" id="id" placeholder="Member ID" />
            <input type="text" name="exercise_name" id="exercise_name" placeholder="Name" />
            <input type="text" name="exercise_type" id="exercise_type" placeholder="Type" />
            <input type="text" name="description" id="description" placeholder="Description" />
            <input type="text" name="amount" id="amount" placeholder="Amount" />
            </div>
            <div class="button-container">
             <button type="submit" class="coloured-button">Create Workout</button>
             <button type="" class="coloured-button">Update Workout</button>
             <button type="" class="coloured-button">Delete Workout</button>
            </div>
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
                <?php
                if(is_array($data) && count($data) != 0){
                    foreach ($data as $data){
                        echo "<tr>";
                        echo "<td>" . $data->Workout_ID . "</td>";
                        echo "<td>" . $data->Staff_ID . "</td>";
                        echo "<td>" . $data->Member_ID . "</td>";
                        echo "<td>" . $data->Exercise_Name . "</td>";
                        echo "<td>" . $data->Excercise_Type . "</td>";
                        echo "<td>" . $data->Description . "</td>";
                        echo "<td>" . $data->Amount . "</td>";
                        echo "</tr>";
                    }
                }
                else{
                    echo "<tr>";
                    echo "<td>No data available</td>";
                    echo "<td>No data available</td>";
                    echo "<td>No data available</td>";
                    echo "<td>No data available</td>";
                    echo "<td>No data available</td>";
                    echo "<td>No data available</td>";
                    echo "<td>No data available</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>

    </main>

    <footer>
    @include('footer')
  @endsection
    </footer>
</body>
</html>