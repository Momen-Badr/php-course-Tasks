<?php

function calculate($number1, $number2, $operator)
{
    switch ($operator) {
        case "+":
            echo $number1 + $number2;
            break;

        case "-":
            echo $number1 - $number2;
            break;

        case "*":
            echo $number1 * $number2;
            break;

        case "/":
            if ($number2 == 0) {
                echo "Cannot divide by zero";
            } else {
                echo $number1 / $number2;
            }
            break;

        default:
            echo "Invalid Operator";
    }
}

calculate(10, 5, "+");

echo " ";

calculate(10, 5, "-");

echo " ";

calculate(10, 5, "*");

echo " ";

calculate(10, 5, "/");

echo " ";


calculate(10, 0, "/");
echo " ";



calculate(10, 5, "%");
