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
            <form action="/create_data" method="post">

                <input type="text" name="Date" id="Date" placeholder="Date" />
                <input type="text" name="Calorie_Intake" id="Calorie_Intake" placeholder="Calorie Intake"/>
                <input type="text" name="Supplement_Intake" id="Supplement_Intake" placeholder="Supplement Intake"/>
                <input type="text" name="Excercise" id="Excercise" placeholder="Exercise"/>
                <input type="text" name="Daily_Duration" id="Daily_Duration" placeholder="Daily Duration"/>
                <input type="text" name="Notes" id="Notes" placeholder="Notes"/>
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