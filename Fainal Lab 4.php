<?php
echo "=== Lab Task 4: Functions in PHP ===\n\n";

// Task 1: Define a function sum($a, $b) that returns the sum of two numbers
function sum($a, $b) {
    return $a + $b;
}

echo "1. Testing sum() function:\n";
echo "   sum(5, 3) = " . sum(5, 3) . "\n";
echo "   sum(10, -2) = " . sum(10, -2) . "\n";
echo "   sum(7.5, 2.5) = " . sum(7.5, 2.5) . "\n";
echo "   sum(0, 15) = " . sum(0, 15) . "\n\n";

// Task 2: Define a function factorial($n) that computes factorial using recursion
function factorial($n) {
    // Base case: factorial of 0 or 1 is 1
    if ($n <= 1) {
        return 1;
    }
    // Recursive case: n * factorial(n-1)
    return $n * factorial($n - 1);
}

echo "2. Testing factorial() function (recursive):\n";
echo "   factorial(0) = " . factorial(0) . "\n";
echo "   factorial(1) = " . factorial(1) . "\n";
echo "   factorial(3) = " . factorial(3) . "\n";
echo "   factorial(5) = " . factorial(5) . "\n";
echo "   factorial(7) = " . factorial(7) . "\n\n";

// Alternative factorial function without recursion (for comparison)
function factorial_iterative($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo "   Alternative iterative factorial(5) = " . factorial_iterative(5) . "\n\n";

// Task 3: Create a function is_prime($n) that checks if a number is prime
function is_prime($n) {
    // Numbers less than 2 are not prime
    if ($n < 2) {
        return false;
    }
    
    // Check divisibility from 2 to sqrt(n)
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false; // Found a divisor, not prime
        }
    }
    return true; // No divisors found, it's prime
}

echo "3. Testing is_prime() function:\n";
$test_numbers = [0, 1, 2, 3, 4, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 29, 31];

foreach ($test_numbers as $number) {
    $result = is_prime($number) ? "prime" : "not prime";
    echo "   " . $number . " is " . $result . "\n";
}

echo "\n";

// Extra: Test all three functions together
echo "4. Combined test of all functions:\n";
echo "   sum(factorial(3), factorial(2)) = " . sum(factorial(3), factorial(2)) . "\n";
echo "   Is 17 prime? " . (is_prime(17) ? "Yes" : "No") . "\n";
echo "   factorial(4) + sum(5, 3) = " . (factorial(4) + sum(5, 3)) . "\n";
?>