<!-- implement attributes similar to how u did for workout controllers  -->
<!-- do the get and set functions -->
<!-- use arryays where it says arrays in the model on class diagram -->
<!-- keep function creat data etc empty -->


<?php

// namespace App;

class Diary
{
    private $DiaryID = [6];
    private $MemberID = 5;
    private $Date = [4/12/2023];
    private $CalorieIntake = [32];
    private $SupplementIntake = "supplement intake";
    private $Excercise = ["excercise"];
    private $DailyDuration = [9];
    private $Notes = ["notes string array"];


    public function getDiaryID(){
        return $DiaryID;
    }
    public function getMemberID(){
        return $MemberID;
    }
    public function getDate(){
        return $Date;
    }
    public function getCalorieIntake(){
        return $CalorieIntake;
    }
    public function getSupplementIntake(){
        return $SupplementIntake;
    }
    public function getExcercise(){
        return $Excercise;
    }
    public function getDailyDuration(){
        return $DailyDuration;
    }
    public function getNotes(){
        return $Notes;
    }



    public function setDiaryID($diary_id){
        $DiaryID = $diary_id;
    }
    public function setMemberID($member_id){
        $MemberID = $member_id;
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


}




// <!-- after done the coding from stuff from class diagarm then create tables in sqlit -->

// <!-- After models and controllers, work on interfaces, then connect diffrent entity realtions together-->