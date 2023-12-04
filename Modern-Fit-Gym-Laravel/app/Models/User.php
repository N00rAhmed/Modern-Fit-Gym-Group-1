<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "Members";
    protected $fillable = ["First_Name", "Last_Name", "DOB", "Address", "Phone_Number", "Email", "Credit_Details", "Password"];
    protected $primaryKey = "MemberID";
    public $timestamps = false;
}


