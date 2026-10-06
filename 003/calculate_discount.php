<?php

function calculateDiscount($price, $customerType)
{
    $discount = match ($customerType) {
        "regular" => 5,
        "vip" => 20,
        "student" => 10,
        default => 0
    };

    if ($discount > 0) {
        $discountAmount = $price * $discount / 100;
        $finalPrice = $price - $discountAmount;
    } else {
        $discountAmount = 0;
        $finalPrice = $price;
    }

    echo "Original Price: " . $price;
    echo "<br>";

    echo "Discount: " . $discountAmount;
    echo "<br>";

    echo "Final Price: " . $finalPrice;
}

calculateDiscount(1000, "vip");

echo "<br><br>";

calculateDiscount(1000, "student");

echo "<br><br>";

calculateDiscount(1000, "regular");