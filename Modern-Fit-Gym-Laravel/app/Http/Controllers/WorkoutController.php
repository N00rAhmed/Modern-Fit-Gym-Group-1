<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkoutModel;

use App\Controllers\SearchFunction;

class Workout extends SearchFunction
{
    private $WorkoutID = 2;
    private $StaffID = 3;
    private $MemberID = 4;
    private $ExcerciseName = "run";
    private $ExcerciseType = "excercise type";
    private $Description = "description";
    private $Amount = 21;

    // private function workoutController()
    // {
    //     // $WorkoutID = 2;
    //     // $StaffID = 3;
    //     // $MemberID = 4;
    //     // $ExcerciseName = "run";
    //     // $ExcerciseType = "excercise type";
    //     // $Description = "description";
    //     // $Amount = 21;
    // }

    public function showWorkout(){
        $workoutData = new WorkoutModel();
        $data = $workoutData->ReadData();
        return view('regime', ['data' => $data]);
    }
    public function createWorkoutData(Request $request){
        $createdWorkoutData = new WorkoutModel();
        $data = $createdWorkoutData->CreateData($request);
        return view('regime', ['data' => $data]);
    }


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


    public function SearchFunction(){

    }

    
}
