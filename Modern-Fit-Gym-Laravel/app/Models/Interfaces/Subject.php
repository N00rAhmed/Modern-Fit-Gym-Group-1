<?php

namespace App\Models\Interfaces;

use App\Models\Interfaces;

interface Subject {
    public function NotifyObserver();
    public function RegisterObserver();
    public function RemoveObserver();
}
