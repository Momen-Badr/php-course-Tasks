<?php

function getGrade($score)
{
    if ($score < 0 || $score > 100) {
        return "Invalid Score";
    }

    return match (true) {
        $score >= 90 => "A",
        $score >= 80 => "B",
        $score >= 70 => "C",
        $score >= 60 => "D",
        default => "F"
    };
}

echo getGrade(95);

echo "<br>";

echo getGrade(85);

echo "<br>";

echo getGrade(75);

echo "<br>";

echo getGrade(65);

echo "<br>";

echo getGrade(40);

echo "<br>";

echo getGrade(120);