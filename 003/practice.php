<?php
declare(strict_types= 1);

// $score=40;

// $resault= $score>= 50 ? "Pass" : "Fail";

// echo $resault;


$day= 'mon';

$message= match ($day) {
    'fri','sat' => "Have a great weekend",
  
    'sun','mon','tue','wed','thu' => "enjoy your working day",
    
    default => "day name is not valid",
};
echo $message;