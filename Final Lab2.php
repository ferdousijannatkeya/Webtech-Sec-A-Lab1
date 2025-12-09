<?php
// Task 1: Temperature Check

// Declare and validate temperature variable
$temperature = 20; // You can change this value to test different scenarios

// Validate temperature is numeric
if (!is_numeric($temperature)) {
    echo "Error: Temperature must be a number.\n";
} else {
    // Convert to float for comparison
    $temperature = (float)$temperature;
    
    // Temperature check using if-elseif-else
    if ($temperature < 10) {
        echo "Temperature: {$temperature}°C - It's cold\n";
    } elseif ($temperature >= 10 && $temperature <= 25) {
        echo "Temperature: {$temperature}°C - It's warm\n";
    } else {
        echo "Temperature: {$temperature}°C - It's hot\n";
    }
}

echo "\n"; // Add a line break between tasks

// Task 2: Day of the Week

// Declare and validate day variable
$day = 3; // You can change this value to test different days (1-7)

// Validate day is numeric and within range
if (!is_numeric($day)) {
    echo "Error: Day must be a number.\n";
} elseif ($day < 1 || $day > 7) {
    echo "Error: Day must be between 1 and 7.\n";
} else {
    // Convert to integer for switch case
    $day = (int)$day;
    
    // Day of week using switch-case
    switch ($day) {
        case 1:
            echo "Day {$day}: Monday\n";
            break;
        case 2:
            echo "Day {$day}: Tuesday\n";
            break;
        case 3:
            echo "Day {$day}: Wednesday\n";
            break;
        case 4:
            echo "Day {$day}: Thursday\n";
            break;
        case 5:
            echo "Day {$day}: Friday\n";
            break;
        case 6:
            echo "Day {$day}: Saturday\n";
            break;
        case 7:
            echo "Day {$day}: Sunday\n";
            break;
        default:
            echo "Day {$day}: Invalid day\n";
            break;
    }
}

// Alternative: More compact validation approach
echo "\n--- Alternative with combined validation ---\n";

// Combined function to validate and process both tasks
function processTemperature($temp) {
    if (!is_numeric($temp)) {
        return "Invalid temperature";
    }
    
    $temp = (float)$temp;
    
    if ($temp < 10) return "It's cold";
    if ($temp <= 25) return "It's warm";
    return "It's hot";
}

function processDay($day) {
    if (!is_numeric($day) || $day < 1 || $day > 7) {
        return "Invalid day";
    }
    
    $days = [
        1 => "Monday",
        2 => "Tuesday", 
        3 => "Wednesday",
        4 => "Thursday",
        5 => "Friday",
        6 => "Saturday",
        7 => "Sunday"
    ];
    
    return $days[(int)$day];
}

// Test the functions
echo "Temperature check: " . processTemperature(30) . "\n";
echo "Day check: " . processDay(5) . "\n";
?>