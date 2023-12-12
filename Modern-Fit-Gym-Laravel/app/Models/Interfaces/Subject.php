<?php

namespace App\Models\Interfaces;

use App\Models\Interfaces;

interface Subject {
    public function NotifyObserver();
    public function RegisterObserver($class);
    public function RemoveObserver();
}
