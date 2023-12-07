<?php

namespace App;

class Diary extends SearchFunction
{
    private $MemberID = 1;
    private $DiaryID = 1;
    private $Date = 25/12/2024;
    private $CalorieIntake = 32;
    private $SupplementIntake = "protein";
    private $Excercise = "pushups";
    private $DailyDuration = 32;
    private $Notes = "notes user written";


    public function getMemberID()
    {
        return $memberID;
    }

    public function getDiaryID()
    {
        return $DiaryID;
    }
    public function getDate()
    {
        return $Date;
    }
    public function getCalorieIntake()
    {
        return $CalorieIntake;
    }
    public function getSupplementIntake()
    {
        return $SupplementIntake;
    }
    public function getExcercise()
    {
        return $Excercise;
    }
    public function getDailyDuration()
    {
        return $DailyDuration;
    }
    public function getNotes()
    {
        return $Notes;
    }




    public function setMemberID($member_id){
        $MemberID = $member_id;
    }
    public function setDiaryID($diary_id){
        $DiaryID = $diary_id;
    }
    public function setDate($date){
        $Date = $date;
    }
    public function setCalorieIntake($calorie_intake){
        $CalorieIntake = $calorie_intake;
    }
    public function setSupplementIntake($supplement_intake){
        $SupplementIntake = $supplement_intake;
    }
    public function setExcercise($excercise){
        $Excercise = $excercise;
    }
    public function setDailyDuration($daily_duration){
        $DailyDuration = $daily_duration;
    }
    public function setNotes($notes){
        $Notes = $notes;
    }



    public function SearchFunction(){

    }

    

}
