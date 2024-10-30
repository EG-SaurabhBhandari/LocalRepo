<?php
// Save this as grade_calculator.php

// Example of indexed array
$scores = [85, 92, 78, 95, 88];

// Example of associative array
$gradeScale = [
    'A' => 90,
    'B' => 80,
    'C' => 70,
    'D' => 60,
    'F' => 0
];

// Function to calculate grade
function calculateGrade($score) {
    if ($score >= 90) {
        return 'A';
    } elseif ($score >= 80) {
        return 'B';
    } elseif ($score >= 70) {
        return 'C';
    } elseif ($score >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

// Example usage
$studentScore = 91;
$grade = calculateGrade($studentScore);
echo "Score: $studentScore, Grade: $grade";
?>