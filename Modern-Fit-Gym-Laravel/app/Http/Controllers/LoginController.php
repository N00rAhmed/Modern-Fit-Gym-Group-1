<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\MembersModel;
use App\Models\StaffModel;

class LoginController extends Controller
{
    public function loginCheck(Request $request)
    {
        $memberData = new MembersModel();
        $staffData = new StaffModel();
        $memberData->setColumns('MemberID, Pin, Password');
        $staffData->setColumns('Staff_ID, Pin, Password');

        foreach($memberData->ReadData() as $PinAPass)
        {
            if($PinAPass->Pin == $request->input('pin'))
            {
                if(Hash::check($request->input('password'), $PinAPass->Password)){
                    session(['ID' => $PinAPass->MemberID]);
                    return view('login', ['ID' => $PinAPass->MemberID]);
                }
            };
        }
        foreach($staffData->ReadData() as $PinAPass)
        {
            if($PinAPass->Pin == $request->input('pin'))
            {
                if(hash::check($request->input('password'), $PinAPass->Password)){
                    session(['ID' => $PinAPass->Staff_ID]);
                    return view('login', ['ID' => $PinAPass->Staff_ID]);
                }
            };
        }
    }
}