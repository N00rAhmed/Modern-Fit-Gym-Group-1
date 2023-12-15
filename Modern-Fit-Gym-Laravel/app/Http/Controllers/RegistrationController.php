<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\RegistrationModel;
use App\Models\MembersModel;
use App\Models\StaffModel;

class RegistrationController extends Controller
{
    public function index(){

        $accounts = RegistrationModel::all();

        return view('admin', ['accounts' => $accounts]);
    }
    

    public function RegisterAccount(Request $request)
    {
        $RegistrationData = new RegistrationModel();
        $RegistrationData->CreateData($request);
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

}

