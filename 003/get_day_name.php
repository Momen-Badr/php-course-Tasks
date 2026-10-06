<?php

function getDayName($day)
{
    switch ($day) {
        case 1:
            echo "Saturday";
            break;

        case 2:
            echo "Sunday";
            break;

        case 3:
            echo "Monday";
            break;

        case 4:
            echo "Tuesday";
            break;

        case 5:
            echo "Wednesday";
            break;

        case 6:
            echo "Thursday";
            break;

        case 7:
            echo "Friday";
            break;

        default:
            echo "Invalid Day Number";
    }
}

getDayName(1);

echo " ";

getDayName(4);

echo " ";

getDayName(10);