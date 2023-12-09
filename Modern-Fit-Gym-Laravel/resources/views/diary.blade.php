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
    <!-- <link rel="stylesheet" href="../Styles/diary.css"> -->
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
            @csrf <!-- {{ csrf_field() }} -->

                <input type="text" name="date" id="date" placeholder="Date" />
                <input type="text" name="calorie_intake" id="calorie_intake" placeholder="Calorie Intake"/>
                <input type="text" name="supplement_intake" id="supplement_intake" placeholder="Supplement Intake"/>
                <input type="text" name="exercise" id="exercise" placeholder="Exercise"/>
                <input type="text" name="daily_duration" id="daily_duration" placeholder="Daily Duration"/>
                <input type="text" name="notes" id="notes" placeholder="Notes"/>
        </div>
        <br />
        <div class="buttons">
            <button type="submit">Add</button>
            </form>

        </div>

        <table>
  <thead>
    <tr>
      <th>Diary_ID</th>
      <th>Member_ID</th>
      <th>Date</th>
      <th>Calorie_Intake</th>
      <th>Supplement_Intake</th>
      <th>Exercise</th>
      <th>Daily_Duration</th>
      <th>Notes</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($data as $data1)
        <tr>
            <td>{{ $data1->Diary_ID }}</td>
            <td>{{ $data1->Member_ID }}</td>
            <td>{{ $data1->Date }}</td>
            <td>{{ $data1->Calorie_Intake }}</td>
            <td>{{ $data1->Supplement_Intake }}</td>
            <td>{{ $data1->Exercise }}</td>
            <td>{{ $data1->Daily_Duration }}</td>
            <td>{{ $data1->Notes }}</td>
        </tr>
        @endforeach
  </tbody>
</table>



        <!-- @foreach ($data as $data1)
        {{ $data1 -> Diary_ID}},
        {{ $data1 -> Member_ID}},
        {{ $data1 -> Date}},
        {{ $data1 -> Calorie_Intake}},
        {{ $data1 -> Supplement_Intake}},
        {{ $data1 -> Exercise}},
        {{ $data1 -> Daily_Duration}},
        {{ $data1 -> Notes}}

        @endforeach -->


    </main>

    <footer>

    </footer>
    @endsection 
</body>
</html>