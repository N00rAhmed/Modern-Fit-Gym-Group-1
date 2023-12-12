<?php

namespace App\Models\Interfaces;

use App\Models\Interfaces;
use Illuminate\Http\Request;

interface CRUDInterface {
    public function CreateData(Request $request);
    public function ReadData();
    public function Update();
    public function DeleteData();
}
