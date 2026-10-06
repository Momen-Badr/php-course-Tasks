<?php

function calculateOrder($category, $item, $quantity)
{
    switch ($category) {
        case "food":
            echo "Category: Food";
            break;

        case "drink":
            echo "Category: Drink";
            break;

        default:
            echo "Invalid Category";
            return;
    }

    $price = match ($item) {
        "Burger" => 100,
        "Kebda" => 150,
        "pizza" => 120,
        "pepsi Mo2at3a" => 30,
        "Water is good" => 15,
        default => 0
    };

    if ($price == 0) {
        echo "Invalid Item";
        return;
    }

    $total = $price * $quantity;

    if ($quantity >= 5) {
        $discount = $total * 10 / 100;
        $finalPrice = $total - $discount;
    } else {
        $discount = 0;
        $finalPrice = $total;
    }

    echo " ";
    echo "Item: " . $item;
    echo " ";

    echo "Quantity: " . $quantity;
    echo " ";
    echo "Price: " . $price;
    echo " ";
    echo "Total: " . $total;
    echo " ";
    echo "Discount: " . $discount;
    echo " ";
    echo "Final Price: " . $finalPrice;
}

calculateOrder("food", "Burger", 5);

echo " ";

calculateOrder("drink", "pepsi Mo2at3a", 2);
