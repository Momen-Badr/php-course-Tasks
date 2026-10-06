<?php

function checkAge($age)
{
    if ($age < 13) {
        echo "Child";
    } elseif ($age >= 13 && $age <= 17) {
        echo "Teenager";
    } else {
        echo "Adult";
    }
}

checkAge(10);

echo "<br>";

checkAge(15);

echo " ";

checkAge(25);