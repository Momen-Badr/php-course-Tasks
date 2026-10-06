<?php

function total_Price($price)
{

    $vat = $price * 0.14;
    $service = $price * 0.12;
    $total = $price + $vat + $service;
    $msg = "the price is: " . $price . " the vat is: " . $vat .
        " the service charge is: " . $service . " the total price is: " . $total;

    echo $msg;
}
total_Price(1000);
