<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interfaces\CRUDInterface;

class Test extends Model implements CRUDInterface
{
    use HasFactory;
}
