

<?php

// namespace App;

class Staff
{
    private $StaffID = [7];
    private $FirstName = ["first name"];
    private $LastName = ["last name"];
    private $DOB = [5/11/2001];
    private $Address = "21 jump street";
    private $PhoneNumber = ["+34 325235335532"];
    private $Email = ["tronn@gmail.com"];
    private $PIN = [911];
    private $Role = ["role"];


    public function getStaffID(){
        return $StaffID;
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
    public function getPIN(){
        return $PIN;
    }
    public function getRole(){
        return $Role;
    }


    public function setStaffID($staff_id){
        $StaffID = $staff_id;
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
    public function setPIN($pin){
        $PIN = $pin;
    }
    public function setRole($role){
        $Role = $role;
    }



    public function CreateData(){

    }
    public function ReadData(){

    }
    public function UpdateData(){

    }
    public function DeleteData(){

    }
    public function Encryption(){

    }
    public function Update(){

    }
    public function SendEmail(){

    }


}

