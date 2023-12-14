<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\RegistrationModel;

class RegistrationController extends Controller
{
    public function index(){
        // 'view.register'
        // Show the registration form
        // return view('register');
        $accounts = User::all();

        return view('admin', ['accounts' => $accounts]);
    }
    

    public function RegisterAccount(Request $request)
    {
        $RegistrationData = new RegistrationModel();
        $RegistrationData->CreateData($request);
        //return redirect('/login')->with('success', 'Registration successful! Please log in.');
        $memberData = new MembersModel();
        $staffData = new StaffModel();
        $memberData->setColumns('Pin');
        $staffData->setColumns('Pin');
        $ranPin = rand(1, 100000);
        foreach($memberData->ReadData() as $memPin){
            if ($memPin->Pin == $ranPin){
                $ranPin = rand(1,100000);
            }
        }

        foreach($staffData->ReadData() as $staffPin){
            if ($staffPin->Pin == $ranPin){
                $ranPin = rand(1,100000);
            }
        }

        // Validate the form data
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'credit_details' => 'required',
            'password' => 'required',
        ]);

        // Create a new user record
        $user = User::create([
            'First_Name' => $validatedData['firstname'],
            'Last_Name' => $validatedData['lastname'],
            'DOB' => $validatedData['dob'],
            'Address' => $validatedData['address'],
            'Phone_Number' => $validatedData['phone'],
            'Email' => $validatedData['email'],
            'Credit_Details' => $validatedData['credit_details'],
            'Pin' => $ranPin,
            'Password' => Hash::make($validatedData['password']), 
        ]);

        // Optionally, you can redirect the user after successful registration
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

}

 
