<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\MembersModel;
use App\Models\StaffModel;

class RegistrationModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'dob',
        'address',
        'phone',
        'email',
        'credit_details',
        'pin',
        'password'
    ];

    // Define the attributes
    protected $firstname;
    protected $lastname;
    protected $dob;
    protected $address;
    protected $phone;
    protected $email;
    protected $credit_details;
    protected $pin;
    protected $password;

    public function CreateData(Request $request){
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $dob = $request->input('dob');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $credit_details = $request->input('credit_details');
        $password = $request->input('password');
        $memberData = new MembersModel();
        $staffData = new StaffModel();
        $memberData->setColumns('Pin');
        $staffData->setColumns('Pin');
        $pin = rand(1, 100000);
        foreach($memberData->ReadData() as $memPin){
            if ($memPin->Pin == $pin){
                $pin = rand(1, 100000);
            }
        }

        foreach($staffData->ReadData() as $staffPin){
            if ($staffPin->Pin == $pin){
                $pin = rand(1, 100000);
            }
        }

        // Check if the entry already exists
        $existingData = DB::table('Members')
            ->where('Pin', $pin)
            // Add more conditions as needed to uniquely identify a record
            ->first();
    
        if (!$existingData) {
            // Insert data
            DB::table('Members')->insert([
                'First_Name' => $firstname,
                'Last_Name' => $lastname,
                'DOB' => $dob,
                'Address' => $address,
                'Phone_Number' => $phone,
                'Email' => $email,
                'Credit_Details' => $credit_details,
                'Pin' => $pin,
                'Password' => Hash::make($password)
            ]);
        }
    }

    //protected $table = "Members";
    //protected $fillable = ["First_Name", "Last_Name", "DOB", "Address", "Phone_Number", "Email", "Credit_Details", "Password"];
    //protected $primaryKey = "MemberID";
    //public $timestamps = false;
}


