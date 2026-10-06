<?php

function weatherRecommendation($temperature, $weather)
{
    if ($temperature < 10) {
        $temperatureType = "Cold";
    } elseif ($temperature <= 25) {
        $temperatureType = "Warm";
    } else {
        $temperatureType = "Hot";
    }

    echo "Temperature: " . $temperatureType;
    echo "<br>";

    switch ($weather) {
        case "Sunny":
            echo "Wear light clothes and use sunglasses.";
            break;

        case "Rainy":
            echo "Take an umbrella.";
            break;

        case "Cloudy":
            echo "You can wear normal clothes.";
            break;

        default:
            echo "Unknown weather condition.";
    }
}

weatherRecommendation(30, "Sunny");
            
echo "<br";

weatherRecommendation(15, "Rainy");

echo "<br>";

weatherRecommendation(5, "Cloudy");