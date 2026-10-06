<?php

function calculateTicketPrice($age, $day)
{
    if ($age < 13) {
        $price = 50;
    } elseif ($age <= 17) {
        $price = 70;
    } else {
        $price = 100;
    }

    switch ($day) {
        case "Friday":
            $price = $price - 20;
            break;

        case "Saturday":
            $price = $price;
            break;

        default:
            $price = $price;
    }

    echo "Ticket Price: " . $price;
}

calculateTicketPrice(10, "Friday");

echo "<br>";

calculateTicketPrice(15, "Saturday");

echo "<br>";

calculateTicketPrice(25, "Friday");