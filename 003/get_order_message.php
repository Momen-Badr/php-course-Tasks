<?php

function getOrderMessage($status)
{
    return match ($status) {
        "pending" => "Order is Pending",
        "shipped" => "Order has been Shipped",
        "delivered" => "Order has been Delivered",
        "cancelled" => "Order has been Cancelled",
        default => "Unknown Order Status"
    };
}

echo getOrderMessage("pending");

echo "<br>";

echo getOrderMessage("shipped");

echo "<br>";

echo getOrderMessage("delivered");

echo "<br>";

echo getOrderMessage("cancelled");

echo "<br>";

echo getOrderMessage("waiting");