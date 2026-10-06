<?php

function calculateGrade($score)
{
    if ($score < 0 || $score > 100) {
        echo "Invalid Score";
    } elseif ($score >= 90) {
        echo "Excellent";
    } elseif ($score >= 80) {
        echo "Very Good";
    } elseif ($score >= 70) {
        echo "Good";
    } elseif ($score >= 50) {
        echo "Pass";
    } else {
        echo "Fail";
    }
}

calculateGrade(95);

echo "  ";

calculateGrade(85);
echo "  ";


calculateGrade(75);
echo "  ";


calculateGrade(60);

echo "  ";

calculateGrade(40);

echo "  ";

calculateGrade(120);