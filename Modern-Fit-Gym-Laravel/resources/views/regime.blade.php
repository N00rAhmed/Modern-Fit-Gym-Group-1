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
        <h1>Assign Regime</h1>

        <!-- <h2>Nutritional Plan</h2>


            <input type="text" name="name" id="name" placeholder="name" />
            <input type="text" name="weight" id="weight" placeholder="weight" />
            <input type="text" name="calorie_amount" id="calorie_amount" placeholder="calorie amount" />
            <input type="text" name="fat" id="fat" placeholder="fat" />
            <input type="text" name="sugar" id="sugar" placeholder="sugar" />
            <input type="text" name="vitamins" id="vitamins" placeholder="vitamins" />
            <button type="submit">Create Nutrition</button> -->
            <div class="input">
    <fieldset>
        <legend>Add Workout</legend>
        <form action="" method="post" class="input-row">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="input-fields">
                <input type="number" name="Member_Id" id="Member" placeholder="Member ID" />
                <input type="text" name="Exercise_Name" id="Exercise_Name" placeholder="Name" />
                <input type="text" name="Exercise_Type" id="Exercise_Type" placeholder="Type" />
                <input type="text" name="Description" id="Description" placeholder="Description" />
                <input type="number" name="Amount" id="Amount" placeholder="Amount" />
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
                    <td>{{ $data1->Exercise_Type }}</td>
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
        <br />

        <table>
        <thead>
            <tr>
                    <th>Member_ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Phone number</th>
                    <th>Email</th>
                </tr>
            </thead>
                        <tbody>
                @if(is_array($data) || is_object($data))
                @foreach ($data as $data1)
                <tr>
                    <td>{{ $data1->MemberID }}</td>
                    <td>{{ $data1->First_Name }}</td>
                    <td>{{ $data1->Last_Name }}</td>
                    <td>{{ $data1->DOB }}</td>
                    <td>{{ $data1->Address }}</td>
                    <td>{{ $data1->Phone_Number }}</td>
                    <td>{{ $data1->Email }}</td>
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