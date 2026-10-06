<?php

declare(strict_types=1);

const TAX_RATE = 0.10;

$companyName = "Tech Solutions";

function displayCompanyName(): void
{
    global $companyName;

    echo "Company Name:$companyName<br>";
}

function calculateBonus(float $salary): float
{
    return $salary * 0.25;
}

function calculateFinalSalary(float $salary, float $bonus): float
{
    $total = $salary + $bonus;
    $tax = $total * TAX_RATE;

    return $total - $tax;
}

function displaySalary(string|int $value): void
{
    echo $value . "<br>";
}


// Main Program

displayCompanyName();


// Employee 1
$employeeName = "Ahmed";
$salary = 8000;

$bonus = calculateBonus($salary);
$finalSalary = calculateFinalSalary($salary, $bonus);

echo "Employee Name: ";
displaySalary($employeeName);

echo "Final Salary: ";
displaySalary((string) $finalSalary);
echo "<hr>";


// Employee 2
$employeeName = "Mohamed";
$salary = 10000;

$bonus = calculateBonus($salary);
$finalSalary = calculateFinalSalary($salary, $bonus);

echo "Employee Name: ";
displaySalary($employeeName);

echo "Final Salary: ";
displaySalary((string) $finalSalary);

echo "<hr>";


// Employee 3
$employeeName = "Ali";
$salary = 12000;

$bonus = calculateBonus($salary);
$finalSalary = calculateFinalSalary($salary, $bonus);

echo "Employee Name: ";
displaySalary($employeeName);

echo "Final Salary: ";
displaySalary((string) $finalSalary);