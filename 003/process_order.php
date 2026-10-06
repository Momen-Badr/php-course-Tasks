<?php

function processOrder($total, $paymentMethod, $customerType)
{
    $discount = match ($customerType) {
        "regular" => 5,
        "vip" => 20,
        "student" => 10,
        default => 0
    };

    if ($total >= 500) {
        $discountAmount = $total * $discount / 100;
        $finalPrice = $total - $discountAmount;
    } else {
        $discountAmount = 0;
        $finalPrice = $total;
    }

    switch ($paymentMethod) {
        case "cash":
            echo "Payment Method: Cash";
            break;

        case "card":
            echo "Payment Method: Card";
            break;

        case "wallet":
            echo "Payment Method: Wallet";
            break;

        default:
            echo "Invalid Payment Method";
    }

    echo "<br>";
    echo "Total: " . $total;
    echo "<br>";
    echo "Discount: " . $discountAmount;
    echo "<br>";
    echo "Final Price: " . $finalPrice;
}

processOrder(1000, "card", "vip");

echo "<br><br>";

processOrder(300, "cash", "student");