<?php

function getShippingCost($country)
{
    return match ($country) {
        "Egypt" => 50,
        "Saudi Arabia" => 100,
        "UAE" => 120,
        "Kuwait" => 150,
        default => 200
    };
}

echo getShippingCost("Egypt");

echo "<br>";

echo getShippingCost("UAE");

echo "<br>";

echo getShippingCost("Kuwait");

echo "<br>";

echo getShippingCost("USA");