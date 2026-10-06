<?php

function calcInvoice($price1, $price2, $price3)
{
    $price = $price1 + $price2 + $price3;
    $vat = $price * 0.14;
    $service = $price * 0.12;
    $total = $price + $vat + $service;

    echo "Price: $price, VAT: $vat, Service Charge: $service, Total Price: $total";
}

calcInvoice(1000, 500, 400);
