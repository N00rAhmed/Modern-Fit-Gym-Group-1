<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/diary.css') }}">
    <title>My diary</title>
</head>

<body>
    @extends('nav')
    @section('content')
    <main>
        <h2>Diary Entry</h2>
        <div class="input">
            <form action="{{ route('diary.submit') }}" method="post">
                @csrf
                <?php
                $value = session()->get('MID');
                if (isset($value)){
                    echo "<input class='hide' type='text' name='id' id='id' value='" . $value . "'>";
                }
                ?>
                <input type="date" name="date" id="date" placeholder="Date" />
                <input type="text" name="calorie_intake" id="calorie_intake" placeholder="Calorie Intake" />
                <input type="text" name="supplement_intake" id="supplement_intake" placeholder="Supplement Intake" />
                <input type="text" name="exercise" id="exercise" placeholder="Exercise" />
                <input type="text" name="daily_duration" id="daily_duration" placeholder="Daily Duration" />
                <input type="text" name="notes" id="notes" placeholder="Notes" />
                <button type="submit" class="coloured-button">Add</button>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Calorie_Intake</th>
                    <th>Supplement_Intake</th>
                    <th>Exercise</th>
                    <th>Daily_Duration</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($data) && count($data) != 0){
                    foreach ($data as $data){
                        echo "<tr>";
                        echo "<td>" . $data->Date  . "</td>";
                        echo "<td>" . $data->Calorie_Intake . "</td>";
                        echo "<td>" . $data->Supplement_Intake . "</td>";
                        echo "<td>" . $data->Exercise . "</td>";
                        echo "<td>" . $data->Daily_Duration . "</td>";
                        echo "<td>" . $data->Notes . "</td>";
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
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
    @include('footer')
    @endsection
</body>

</html>