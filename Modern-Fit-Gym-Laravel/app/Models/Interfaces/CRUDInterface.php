<?php

namespace App\Models\Interfaces;

use App\Models\Interfaces;

interface CRUDInterface {
    public function CreateData();
    public function ReadData();
    public function Update();
    public function DeleteData();
}
