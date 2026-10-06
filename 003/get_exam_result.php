<?php

function getExamResult($score, $attendance, $status)
{
    if ($score < 0 || $score > 100) {
        echo "Invalid Score";
        return;
    }

    if ($attendance < 75) {
        echo "Failed بسبب الحضور";
        return;
    }

    switch ($status) {
        case "active":
            echo "Student is Active";
            break;

        case "inactive":
            echo "Student is Inactive";
            return;

        default:
            echo "Unknown Student Status";
            return;
    }

    echo " ";

    if ($score >= 50) {
        $result = match (true) {
            $score >= 90 => "Excellent",
            $score >= 80 => "Very Good",
            $score >= 70 => "Good",
            $score >= 60 => "Pass",
            default => "Pass"
        };
    } else {
        $result = "Fail";
    }

    echo "Exam Result: " . $result;
}

getExamResult(95, 90, "active");

echo " ";

getExamResult(75, 80, "active");

echo " ";

getExamResult(40, 90, "active");

echo " ";

getExamResult(90, 60, "active");

echo " ";

getExamResult(90, 90, "inactive");
