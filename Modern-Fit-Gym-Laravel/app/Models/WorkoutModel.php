<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Models\Interfaces\CRUDInterface;
use App\Models\Interfaces\Subject;

class WorkoutModel extends Model implements CRUDInterface, Subject
{
    use HasFactory;

    protected $fillable = [
        'WorkoutID',
        'MemberID',
        'ExcerciseName',
        'ExcerciseType',
        'Description',
        'Amount',
        'Filter'
    ];

    private $WorkoutID;
    private $StaffID;
    private $MemberID;
    private $ExcerciseName;
    private $ExcerciseType;
    private $Description;
    private $Amount;
    protected $Filter;
    private $ObserverList = [];


    public function getWorkoutID()
    {
        return $this->WorkoutID;
    }
    public function getStaffID(){
        return $this->StaffID;
    }
    public function getMemberID(){
        return $this->MemberID;
    }
    public function getExcerciseName(){
        return $this->ExcerciseName;
    }
    public function getExcerciseType(){
        return $this->ExcerciseType;
    }
    public function getDescription(){
        return $this->Description;
    }
    public function getAmount(){
        return $this->Amount;
    }
    public function getFilter(){
        return $this->Filter;
    }
    public function getObserverList(){
        return $this->ObserverList;
    }
    
    public function setWorkoutID($workout_id){
        $this->WorkoutID = $workout_id;
    }
    public function setStaffID($staff_id){
        $this->StaffID = $staff_id;
    }
    public function setMemberID($member_id){
        $this->MemberID = $member_id;
    }
    public function setExcerciseName($excercise_name){
        $this->ExcerciseName = $excercise_name;
    }
    public function setExcerciseType($excercise_type){
        $this->ExcerciseType = $excercise_type;
    }
    public function setDescription($description){
        $this->Description = $description;
    }
    public function setAmount($amount){
        $this->Amount = $amount;
    }
    public function setFilter($Filter){
        $this->Filter = $Filter;
    }
    public function setObserverList($observer_list){
        $ObserverList = $observer_list;
    }


    public function CreateData(Request $request){
        $Member_ID = $request->input('id');
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
                'Member_ID' => $Member_ID,
                'Exercise_Name' => $Exercise_Name,
                'Excercise_Type' => $Excercise_Type,
                'Description' => $Description,
                'Amount' => $Amount
            ]);
        }
    
        // Fetch all data after insertion (if needed)
        $data = DB::table('Workout Plan')->get()->toArray();
    
        // Decrypt specific fields 
        foreach ($data as $entry) {
            $entry->Exercise_Name = Crypt::decrypt($entry->Exercise_Name);
            $entry->Excercise_Type = Crypt::decrypt($entry->Excercise_Type);
            $entry->Description = Crypt::decrypt($entry->Description);
            $entry->Amount = Crypt::decrypt($entry->Amount);
    
            // Decrypt  encrypted fields 
        }
    
        return $data;
    }


    public function ReadData(){
        $data = DB::table('Workout Plan')->where('Member_ID', '=', $this->Filter)->get()->toArray();

        foreach ($data as $entry) {
            $entry->Exercise_Name = Crypt::decrypt($entry->Exercise_Name);
            $entry->Excercise_Type = Crypt::decrypt($entry->Excercise_Type);
            $entry->Description = Crypt::decrypt($entry->Description);
            $entry->Amount = Crypt::decrypt($entry->Amount);
    
            // Decrypt  encrypted fields 
        }


        return $data;

    }


    
    public function DeleteData(){

    }

    public function NotifyObserver(){
        foreach ($observerList as $ob){
            $ob->UpdateOb();
        }
    }
    public function RegisterObserver($class){
        $ObserverList[] = $class;
    }
    public function RemoveObserver($class){
        $keyOfOb = array_search($class, $observerList);
        unset($ObserverList[$keyOfOb]);
    }
}




// <!-- after done the coding from stuff from class diagarm then create tables in sqlit -->

// <!-- After models and controllers, work on interfaces, then connect diffrent entity realtions together-->