<?php
echo "Task 1: Using a for loop to print numbers from 1 to 20\n";
echo "=====================================================\n";

for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}
echo "\n\n";

echo "Task 2: Using a while loop to print even numbers from 1 to 20\n";
echo "===========================================================\n";

$counter = 1;
while ($counter <= 20) {
    if ($counter % 2 == 0) {
        echo $counter . " ";
    }
    $counter++;
}
echo "\n\n";

echo "Task 3: Using a foreach loop with an associative array of fruits\n";
echo "=============================================================\n";

// Create associative array of fruits
$fruits = array(
    "apple" => "red",
    "banana" => "yellow",
    "orange" => "orange",
    "grape" => "purple",
    "kiwi" => "green",
    "blueberry" => "blue",
    "strawberry" => "red",
    "watermelon" => "green"
);

echo "All fruits and their colors:\n";
foreach ($fruits as $fruit => $color) {
    echo ucfirst($fruit) . " is " . $color . "\n";
}
echo "\n";

echo "Task 4: Using a break statement to stop after first 5 numbers\n";
echo "===========================================================\n";
echo "Printing numbers 1-20, but stopping after 5:\n";

for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
    if ($i == 5) {
        echo "(stopped here with break statement)";
        break;
    }
}
echo "\n";
?>