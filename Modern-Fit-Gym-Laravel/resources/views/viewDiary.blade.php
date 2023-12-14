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
    <!-- <link rel="stylesheet" href="../Styles/viewdiary.css"> -->
    <link rel="stylesheet" href="{{ asset('../css/viewdiary.css') }}">

    <title>View Diary</title>
</head>
<body>
@extends('nav')
  @section('content')

    <main>
        <h1>Yo trainer you can View Diary of member here</h1>
        <h2>Diary</h2>

        <div class="diary-container">
            Diary Information of Member View

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
  @if(is_array($data) || is_object($data))
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
                <!-- Rest of your table data -->
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="8">No data available</td>
        </tr>
    @endif
  </tbody>
</table>
        </div>
    </main>

    @include('footer')
  @endsection
</body>
</html>