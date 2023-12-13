<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

use App\Models\Interfaces\CRUDInterface;
use App\Models\Interfaces\EncryptionInterface;
use App\Models\Interfaces\Subject;

class WorkoutModel extends Model implements CRUDInterface, EncryptionInterface, Subject
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


    public function CreateData(Request $request){
        $Exercise_Name = Crypt::encrypt($request->input('exercise_name'));
        $Excercise_Type = Crypt::encrypt($request->input('exercise_type'));
        $Description = Crypt::encrypt($request->input('description'));
        $Amount = Crypt::encrypt($request->input('amount'));
    
        // Check if the entry already exists
        $existingData = DB::table('Workout Plan')
            ->where('Description', $Description)
            // Add more conditions as needed to uniquely identify a record
            ->first();
    
        if (!$existingData) {
            // Insert data
            DB::table('Workout Plan')->insert([
                'Exercise_Name' => $Exercise_Name,
                'Excercise_Type' => $Excercise_Type,
                'Description' => $Description,
                'Amount' => $Amount
            ]);
        }
    
        // Fetch all data after insertion (if needed)
        $data = DB::table('Workout Plan')->get()->toArray();
    
        // Decrypt specific fields in each entry
        foreach ($data as $entry) {
            $entry->Exercise_Name = Crypt::decrypt($entry->Exercise_Name);
            $entry->Excercise_Type = Crypt::decrypt($entry->Excercise_Type);
            $entry->Description = Crypt::decrypt($entry->Description);
            $entry->Amount = Crypt::decrypt($entry->Amount);
    
            // Decrypt other encrypted fields similarly
        }
    
        return $data;
    }


    public function ReadData(){
        $data = DB::table('Workout Plan')->get()->toArray();

        foreach ($data as $entry) {
            $entry->Exercise_Name = Crypt::decrypt($entry->Exercise_Name);
            $entry->Excercise_Type = Crypt::decrypt($entry->Excercise_Type);
            $entry->Description = Crypt::decrypt($entry->Description);
            $entry->Amount = Crypt::decrypt($entry->Amount);
    
            // Decrypt other encrypted fields similarly
        }


        return $data;

    }


    public function UpdateData(Request $request, $workoutID){
        $Exercise_Name = Crypt::encrypt($request->input('exercise_name'));
        $Excercise_Type = Crypt::encrypt($request->input('exercise_type'));
        $Description = Crypt::encrypt($request->input('description'));
        $Amount = Crypt::encrypt($request->input('amount'));
    
        // Update data based on Workout ID
        $data = DB::table('Workout Plan')
            ->where('Workout_ID', $workoutID)
            ->update([
                'Exercise_Name' => $Exercise_Name,
                'Excercise_Type' => $Excercise_Type,
                'Description' => $Description,
                'Amount' => $Amount
            ]);
    
        // Fetch updated data if needed
        $updatedData = DB::table('Workout Plan')
                        ->where('Workout_ID', $workoutID)
                        ->first();
    
        if ($updatedData) {
            $updatedData->Exercise_Name = Crypt::decrypt($updatedData->Exercise_Name);
            $updatedData->Excercise_Type = Crypt::decrypt($updatedData->Excercise_Type);
            $updatedData->Description = Crypt::decrypt($updatedData->Description);
            $updatedData->Amount = Crypt::decrypt($updatedData->Amount);
            // Decrypt other encrypted fields similarly
        }
    
        return ['data' => $data, 'updatedData' => $updatedData];
    }
    

    public function DeleteData(){

    }
    
    public function Encryption(){

    }

    public function NotifyObserver(){
        foreach ($observerList as $ob){
            ob->UpdateOb();
        }
    }
    public function RegisterObserver($class){
        $ObserverList = ['MembersModel', 'StaffModel'];
    }
    public function RemoveObserver(){
        $ObserverList = [];
    }

    
}




// <!-- after done the coding from stuff from class diagarm then create tables in sqlit -->

// <!-- After models and controllers, work on interfaces, then connect diffrent entity realtions together-->