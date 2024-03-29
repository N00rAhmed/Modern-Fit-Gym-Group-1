<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use App\Models\Interfaces\CRUDInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class DiaryModel extends Model implements CRUDInterface
// class Diary extends Model
{
    use HasFactory;

    protected $fillable = [
        'MemberID',
        'Date',
        'CalorieIntake',
        'SupplementIntake',
        'Exercise',
        'DailyDuration',
        'Notes',
        'Filter'
    ];

    // Define the attributes
    protected $MemberID;
    protected $Date;
    protected $CalorieIntake;
    protected $SupplementIntake;
    protected $Exercise;
    protected $DailyDuration;
    protected $Notes;
    protected $Filter;





    // Getter methods
    public function getDiaryID(){
        return $this->DiaryID;
    }
    public function getMemberID(){
        return $this->MemberID;
    }
    public function getDate(){
        return $this->Date;
    }
    public function getCalorieIntake(){
        return $this->CalorieIntake;
    }
    public function getSupplementIntake(){
        return $this->SupplementIntake;
    }
    public function getExercise(){
        return $this->Exercise;
    }
    public function getDailyDuration(){
        return $this->DailyDuration;
    }
    public function getNotes(){
        return $this->Notes;
    }
    public function getFilter(){
        return $this->Fitler;
    }

    // Setter methods
    public function setDiaryID($diary_id){
        $this->DiaryID = $diary_id;
    }
    public function setMemberID($member_id){
        $this->MemberID = $member_id;
    }
    public function setDate($date){
        $this->Date = $date;
    }
    public function setCalorieIntake($calorie_intake){
        $this->CalorieIntake = $calorie_intake;
    }
    public function setSupplementIntake($supplement_intake){
        $this->SupplementIntake = $supplement_intake;
    }
    public function setExercise($exercise){
        $this->Exercise = $exercise;
    }
    public function setDailyDuration($daily_duration){
        $this->DailyDuration = $daily_duration;
    }
    public function setNotes($notes){
        $this->Notes = $notes;
    }
    public function setFilter($Filter){
        $this->Filter = $Filter;
    }

    public function CreateData(Request $request){
        $MemberID = $request->input('id');
        $date = Crypt::encrypt($request->input('date'));
        $calorieIntake = Crypt::encrypt($request->input('calorie_intake'));
        $supplementIntake = Crypt::encrypt($request->input('supplement_intake'));
        $exercise = Crypt::encrypt($request->input('exercise'));
        $dailyDuration = Crypt::encrypt($request->input('daily_duration'));
        $notes = Crypt::encrypt($request->input('notes'));

        // Encrypt fields 
    
        // Check if the entry already exists
        $existingData = DB::table('Diary')
            ->where('MemberID', $MemberID)
            ->where('Notes', $notes)
            // Add more conditions as needed to uniquely identify a record
            ->first();
    
        if (!$existingData) {
            // Insert data
            DB::table('Diary')->insert([
                'Member_ID' => $MemberID,
                'Date' => $date,
                'Calorie_Intake' => $calorieIntake,
                'Supplement_Intake' => $supplementIntake,
                'Exercise' => $exercise,
                'Daily_Duration' => $dailyDuration,
                'Notes' => $notes
            ]);
        }
    
        // Fetch all data after insertion (if needed)

        $data = DB::table('Diary')->where('Member_ID', '=', $request->input('id'))->get()->toArray();

        // Decrypt specific fields in each entry
        foreach ($data as $entry) {
            $entry->Date = Crypt::decrypt($entry->Date);
            $entry->Calorie_Intake = Crypt::decrypt($entry->Calorie_Intake);
            $entry->Supplement_Intake = Crypt::decrypt($entry->Supplement_Intake);
            $entry->Exercise = Crypt::decrypt($entry->Exercise);
            $entry->Daily_Duration = Crypt::decrypt($entry->Daily_Duration);
            $entry->Notes = Crypt::decrypt($entry->Notes);

            // Decrypt other encrypted fields 
        }
    
        return $data;
    

    }

        
    public function ReadData(){

        $data = DB::table('Diary')->where('Member_ID', '=', $this->Filter)->get()->toArray();

        foreach ($data as $entry) {
            $entry->Date = Crypt::decrypt($entry->Date);
            $entry->Calorie_Intake = Crypt::decrypt($entry->Calorie_Intake);
            $entry->Supplement_Intake = Crypt::decrypt($entry->Supplement_Intake);
            $entry->Exercise = Crypt::decrypt($entry->Exercise);
            $entry->Daily_Duration = Crypt::decrypt($entry->Daily_Duration);
            $entry->Notes = Crypt::decrypt($entry->Notes);

            // Decrypt other encrypted fields 
        }


        return $data;
    }
    public function UpdateData(){

    }
    public function DeleteData(){

    }


}

