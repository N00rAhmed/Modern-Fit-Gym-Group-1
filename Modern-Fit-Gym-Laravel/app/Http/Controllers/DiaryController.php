<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DiaryModel;


class DiaryController extends Controller
{
    
    private $MemberID = 1;
    private $DiaryID = 1;
    private $Date = 25/12/2024;
    private $CalorieIntake = 32;
    private $SupplementIntake = "protein";
    private $Excercise = "pushups";
    private $DailyDuration = 32;
    private $Notes = "notes user written";

    public function showDiary(){
        $diaryData = new DiaryModel();
        $data = $diaryData->ReadData();
        return view('diary', ['data' => $data]);
    }

    public function creatDiaryData(){
        $newDiaryData = new DiaryModel();
        $newData = $newDiaryData->CreateData();
        return view('diary', ['newData' => $newData]);
    }


// shift f9 for brakpints

    // Getter methods
    public function getMemberID()
    {
        return $this->MemberID;
    }

    public function getDiaryID()
    {
        return $this->DiaryID;
    }

    public function getDate()
    {
        return $this->Date;
    }

    public function getCalorieIntake()
    {
        return $this->CalorieIntake;
    }

    public function getSupplementIntake()
    {
        return $this->SupplementIntake;
    }

    public function getExercise()
    {
        return $this->Exercise;
    }

    public function getDailyDuration()
    {
        return $this->DailyDuration;
    }

    public function getNotes()
    {
        return $this->Notes;
    }

    // Setter methods
    public function setMemberID($member_id){
        $this->MemberID = $member_id;
    }

    public function setDiaryID($diary_id){
        $this->DiaryID = $diary_id;
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



    public function SearchFunction(){

    }

    // Model functionality and then instantiated in controller
// route woud route to controller
    

}
