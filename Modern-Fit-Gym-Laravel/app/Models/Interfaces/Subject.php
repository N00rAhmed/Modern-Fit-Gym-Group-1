<?php

interface Subject {
    public function NotifyObserver();
    public function RegisterObserver();
    public function RemoveObserver();
}
