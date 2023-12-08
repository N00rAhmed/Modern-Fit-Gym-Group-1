<!-- implement attributes similar to how u did for workout controllers  -->
<!-- do the get and set functions -->
<!-- use arryays where it says arrays in the model on class diagram -->
<!-- keep function creat data etc empty -->


<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


use App\Models\Interfaces\CRUDInterface;
use App\Models\Interfaces\EncryptionInterface;


class DiaryModel extends Model implements CRUDInterface, EncryptionInterface
// class Diary extends Model
{
    protected $table = 'Diary'; // Assuming 'diaries' is the table name

    use HasFactory;

    // private $DiaryID = [6];
    // private $MemberID = 5;
    // private $Date = [4/12/2023];
    // private $CalorieIntake = [32];
    // private $SupplementIntake = "supplement intake";
    // private $Excercise = ["excercise"];
    // private $DailyDuration = [9];
    // private $Notes = ["notes string array"];

    protected $fillable = [
        'MemberID',
        'Date',
        'CalorieIntake',
        'SupplementIntake',
        'Exercise',
        'DailyDuration',
        'Notes'
    ];

    // Define the attributes
    protected $MemberID;
    protected $Date;
    protected $CalorieIntake;
    protected $SupplementIntake;
    protected $Exercise;
    protected $DailyDuration;
    protected $Notes;




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




    public function CreateData(){
        // $databaseConnection = DB::connection('sqlite');
    }
    public function ReadData(){
        return Diary::all();

    }
    public function UpdateData(){

    }
    public function DeleteData(){

    }
    public function Encryption(){

    }


}




// <!-- after done the coding from stuff from class diagarm then create tables in sqlit -->

// <!-- After models and controllers, work on interfaces, then connect diffrent entity realtions together-->