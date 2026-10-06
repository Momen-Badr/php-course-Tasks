<?php

function analyzeNumber($number)
{
    if ($number > 0) {
        echo "Positive";
    } elseif ($number < 0) {
        echo "Negative";
    } else {
        echo "Zero";
    }

    echo " ";

    if ($number % 2 == 0) {
        echo "Even";
    } else {
        echo "Odd";
    }
}

analyzeNumber(10);

echo " ";

analyzeNumber(-5);

echo " ";

analyzeNumber(0);