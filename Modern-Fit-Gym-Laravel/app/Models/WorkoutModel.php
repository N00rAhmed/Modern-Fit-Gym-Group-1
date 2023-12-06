<!-- implement attributes similar to how u did for workout controllers  -->
<!-- do the get and set functions -->
<!-- use arryays where it says arrays in the model on class diagram -->
<!-- keep function creat data etc empty -->


<?php

// namespace App;
// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use App\Models\Interfaces\CRUDInterface;
use App\Models\Interfaces\EncryptionInterface;
use App\Models\Interfaces\Subject;

class Workout implements CRUDInterface, EncryptionInterface, Subject
{
    private $WorkoutID = [2];
    private $StaffID = 4;
    private $MemberID = 7;
    private $ExcerciseName = ["excersise name"];
    private $ExcerciseType = "excersise type";
    private $Description = ["description"];
    private $Amount = [211];
    private $ObserverList = "?observers";


    public function getWorkoutID()
    {
        return $WorkoutID;
    }
    public function getStaffID(){
        return $StaffID;
    }
    public function getMemberID(){
        return $MemberID;
    }
    public function getExcerciseName(){
        return $ExcerciseName;
    }
    public function getExcerciseType(){
        return $ExcerciseType;
    }
    public function getDescription(){
        return $Description;
    }
    public function getAmount(){
        return $Amount;
    }
    public function getObserverList(){
        return $ObserverList;
    }
    
    public function setWorkoutID($workout_id){
        $WorkoutID = $workout_id;
    }
    public function setStaffID($staff_id){
         $StaffID = $staff_id;
    }
    public function setMemberID($member_id){
        $MemberID = $member_id;
    }
    public function setExcerciseName($excercise_name){
        $ExcerciseName = $excercise_name;
    }
    public function setExcerciseType($excercise_type){
        $ExcerciseType = $excercise_type;
    }
    public function setDescription($description){
        $Description = $description;
    }
    public function setAmount($amount){
        $Amount = $amount;
    }
    public function setObserverList($observer_list){
        $ObserverList = $observer_list;
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
    public function NotifyObserver(){

    }
    public function RegisterObserver(){

    }
    public function RemoveObserver(){

    }

    
}




// <!-- after done the coding from stuff from class diagarm then create tables in sqlit -->

// <!-- After models and controllers, work on interfaces, then connect diffrent entity realtions together-->