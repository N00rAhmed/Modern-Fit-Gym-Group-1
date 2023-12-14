<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Interfaces\CRUDInterface;
use App\Models\Interfaces\Observer;

class MembersModel extends Model implements CRUDInterface, Observer
{
    use HasFactory;

    private $MemberID = [6];
    private $FirstName = ["first name"];
    private $LastName = ["last name"];
    private $DOB = [3/12/2000];
    private $Address = "21 jump street";
    private $PhoneNumber = ["+44 80329643290763"];
    private $Email = ["tronn@gmail.com"];
    private $CreditDetails = ["283223092990"];
    private $Pin = [911];
    protected $Columns = "placeholder";


    public function getMemberID(){
        return $MemberID;
    }
    public function getFirstName(){
        return $FirstName;
    }
    public function getLastName(){
        return $LastName;
    }
    public function getDOB(){
        return $DOB;
    }
    public function getAddress(){
        return $Address;
    }
    public function getPhoneNumber(){
        return $PhoneNumber;
    }
    public function getEmail(){
        return $Email;
    }
    public function getCreditDetails(){
        return $CreditDetails;
    }
    public function getPin(){
        return $Pin;
    }
    public function getColumns(){
        return $this->Columns;
    }


    public function setMemberID($member_id){
        $MemberID = $member_id;
    }
    public function setFirstName($first_name){
        $FirstName = $first_name;
    }
    public function setLastName($last_name){
        $LastName = $last_name;
    }
    public function setDOB($dob){
        $DOB = $dob;
    }
    public function setAddress($address){
        $Address = $address;
    }
    public function setPhoneNumber($phone_number){
        $PhoneNumber = $phone_number;
    }
    public function setEmail($email){
        $Email = $email;
    }
    public function setCreditDetails($credit_details){
        $CreditDetails = $credit_details;
    }
    public function setPin($pin){
        $Pin = $pin;
    }
    public function setColumns($Columns){
        $this->Columns = $Columns;
    }



    public function CreateData(Request $request){

    }
    public function ReadData(){
        $data = DB::select('select ' . $this->Columns . ' from Members');
        return $data;
    }
    public function UpdateData(){

    }
    public function DeleteData(){

    }
    public function UpdateOb(){

    }
    public function SendEmail(){

    }


}