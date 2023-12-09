<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use App\Models\Interfaces\CRUDInterface;
use App\Models\Interfaces\EncryptionInterface;


class DiaryModel extends Model implements CRUDInterface, EncryptionInterface
// class Diary extends Model
{
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

        // // Retrieve form data
        // $firstname = $_POST['firstname'];
        // $lastname = $_POST['lastname'];
        // $dob = $_POST['dob'];
        // $address = $_POST['address'];
        // $phone = $_POST['phone'];
        // $email = $_POST['email'];
        // $credit_details = $_POST['credit_details'];
        // $password = $_POST['password'];

        // // Encrypt sensitive data using the generated IV
        // $encrypted_credit_details = openssl_encrypt($credit_details, 'aes-256-cbc', 'your_secret_key', 0, $iv);
        // $encrypted_password = openssl_encrypt($password, 'aes-256-cbc', 'your_secret_key', 0, $iv);

        // // Prepare and execute the SQL query
        // $stmt = $db->prepare("INSERT INTO Members (First_Name, Last_Name, DOB, Address, Phone_Number, Email, Credit_Details, Password, IV) VALUES (:firstname, :lastname, :dob, :address, :phone, :email, :credit_details, :password, :iv)");
        // $stmt->bindValue(':firstname', $firstname);
        // $stmt->bindValue(':lastname', $lastname);
        // $stmt->bindValue(':dob', $dob);
        // $stmt->bindValue(':address', $address);
        // $stmt->bindValue(':phone', $phone);
        // $stmt->bindValue(':email', $email);
        // $stmt->bindValue(':credit_details', $encrypted_credit_details);
        // $stmt->bindValue(':password', $encrypted_password);
        // $stmt->bindValue(':iv', $hex_iv); // Store the IV for decryption

        // $result = $stmt->execute();

        // $user = User::create([
        //     'First_Name' => $validatedData['firstname'],
        //     'Last_Name' => $validatedData['lastname'],
        //     'DOB' => $validatedData['dob'],
        //     'Address' => $validatedData['address'],
        //     'Phone_Number' => $validatedData['phone'],
        //     'Email' => $validatedData['email'],
        //     'Credit_Details' => $validatedData['credit_details'],
        //     'Password' => Crypt::encrypt($validatedData['password']), 
        // ]);



        // $date = input('Date');
        // $calorieIntake = input('Calorie_Intake');
        // $supplementIntake = input('Supplement_Intake');
        // $exercise = input('Exercise');
        // $dailyDuration = input('Daily_Duration');
        // $notes = input('Notes');
        // $createData = DB::insert('insert into Diary (Date, Calorie_Intake, Supplement_Intake, Exercise, Daily_Duration, Notes) values (Date, Calorie_Intake, Supplement_Intake, Exercise, Daily_Duration, Notes)', [$date, $calorieIntake, $supplementIntake, $exercise, $dailyDuration, $notes]);
    
        // return $CreateData;

        // $createData = DB::insert('insert into Diary (Date, Calorie_Intake, Supplement_Intake, Exercise, Daily_Duration, Notes) values (?, ?)', [1, 'Marc']);

    }
    public function ReadData(){
        // return Diary::all();
        // $table = "Diary";
        // $fillable = ["Member_ID", "Date", "Calorie_Intake", "Supplement_Intake", "Exercise", "Daily_Duration", "Notes"];
        // $primaryKey = "Diary_ID";
        // $timestamps = false;
        $data = DB::select('select * from Diary');
        return $data;
    }
    public function UpdateData(){

    }
    public function DeleteData(){

    }
    public function Encryption(){

    }


}



// <!-- implement attributes similar to how u did for workout controllers  -->
// <!-- do the get and set functions -->
// <!-- use arryays where it says arrays in the model on class diagram -->
// <!-- keep function creat data etc empty -->




// <!-- after done the coding from stuff from class diagarm then create tables in sqlit -->

// <!-- After models and controllers, work on interfaces, then connect diffrent entity realtions together-->