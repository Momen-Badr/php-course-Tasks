<?php

function trafficLight($light)
{
    switch ($light) {
        case "Red":
            echo "Stop";
            break;

        case "Yellow":
            echo "Get Ready";
            break;

        case "Green":
            echo "Go";
            break;

        default:
            echo "Invalid Light";
    }
}

trafficLight("Red");

echo "<br>";

trafficLight("Yellow");

echo "<br>";

trafficLight("Green");

echo "<br>";

trafficLight("Blue");