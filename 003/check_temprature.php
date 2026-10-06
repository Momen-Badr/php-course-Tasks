<?php

function checkTemperature($temperature)
{
    if ($temperature < 0) {
        echo "Very Cold";
    } elseif ($temperature <= 15) {
        echo "Cold";
    } elseif ($temperature <= 25) {
        echo "Warm";
    } elseif ($temperature <= 35) {
        echo "Hot";
    } else {
        echo "Very Hot";
    }
}

checkTemperature(-5);

echo "<br>";

checkTemperature(10);

echo "<br>";

checkTemperature(22);

echo "<br>";

checkTemperature(30);

echo "<br>";

checkTemperature(40);