<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\MembersModel;
use App\Models\StaffModel;



class LoginController extends Controller
{
    public function loginCheck(Request $request)
    {
        $memberData = new MemberModel();
        $staffData = new StaffModel();
        $memberData->setColumns('Pin, Password');
        $staffData->setColumns('Pin, Password');
        $MemPinAPass = $memberData->ReadData();
        $StaPinAPass = $staffData->ReadData();
        $success = "Done";
        $failure = "Failure";
        foreach($MemPinAPass as $PinAPass)
        {
            if($PinAPass->Pin == $request->input('pin'))
            {
                if(crypt::decrypt($PinAPass->Password) == $request->input('password')){
                    return view('login', ['SorF' => $success]);
                }
                else{
                    return view('login', ['SorF' => $failure]);
                }
            };
        }
        foreach($StaPinAPass as $PinAPass)
        {
            if($PinAPass->Pin == $request->input('pin'))
            {
                if(crypt::decrypt($PinAPass->Password) == $request->input('password')){
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