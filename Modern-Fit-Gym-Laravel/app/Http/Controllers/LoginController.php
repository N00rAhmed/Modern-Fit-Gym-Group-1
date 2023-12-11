<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Models\MembersModel;
use App\Models\StaffModel;

class LoginController extends Controller
{
    public function loginCheck(Request $request)
    {
        $memberData = new MembersModel();
        $staffData = new StaffModel();
        $memberData->setColumns('Pin, Password');
        $staffData->setColumns('Pin, Password');
        $success = "Done";
        $failure = "Failure";

        foreach($memberData->ReadData() as $PinAPass)
        {
            if($PinAPass->Pin == $request->input('pin'))
            {
                if(Hash::check($request->input('password'), $PinAPass->Password)){
                    return view('login', ['SorF' => $success]);
                }
                else{
                    return view('login', ['SorF' => $failure]);
                }
            };
        }
        foreach($staffData->ReadData() as $PinAPass)
        {
            if($PinAPass->Pin == $request->input('pin'))
            {
                if(hash::check($request->input('password'), $PinAPass->Password)){
                    return view('login', ['SorF' => $success]);
                }
                else{
                    return view('login', ['SorF' => $failure]);
                }
            };
        }
    }

    public function login()
    {

    }
}