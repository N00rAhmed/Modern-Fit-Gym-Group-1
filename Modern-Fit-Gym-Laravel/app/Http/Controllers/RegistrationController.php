<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index(){
        // 'view.register'
        // Show the registration form
        // return view('register');
        $accounts = User::all();

        return view('admin', ['accounts' => $accounts]);

    }
    

    public function submit(Request $request)
    {
        // Validate the form data
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
            'Password' => Hash::make($validatedData['password']), 
        ]);

        // Optionally, you can redirect the user after successful registration
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

}

 
