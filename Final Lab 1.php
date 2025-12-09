<!DOCTYPE html>
<html>
<head>
    <title>PHP Data Types and Operations</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .section { margin-bottom: 30px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h2 { color: #333; }
        .result { background-color: #f5f5f5; padding: 10px; margin: 10px 0; }
    </style>
</head>
<body>
    <h1>PHP Data Types and Operations Demo</h1>

    <?php
    // ====================
    // PART 1: Variable Declaration
    // ====================
    echo '<div class="section">';
    echo '<h2>1. Variable Declaration and Initialization</h2>';
    
    // String variable
    $stringVar = "Hello, PHP World!";
    
    // Integer variable
    $integerVar = 42;
    
    // Float variable
    $floatVar = 3.14159;
    
    // Boolean variable
    $booleanVar = true;
    
    // Display initial variables
    echo "<p>String: $stringVar</p>";
    echo "<p>Integer: $integerVar</p>";
    echo "<p>Float: $floatVar</p>";
    echo "<p>Boolean: " . ($booleanVar ? 'true' : 'false') . "</p>";
    echo '</div>';
    
    // ====================
    // PART 2: Arithmetic Operations
    // ====================
    echo '<div class="section">';
    echo '<h2>2. Arithmetic Operations</h2>';
    
    // Declare variables for operations
    $num1 = 15;
    $num2 = 7;
    $float1 = 12.5;
    $float2 = 4.2;
    
    // Integer operations
    echo "<div class='result'>";
    echo "<h3>Integer Operations (15 and 7):</h3>";
    echo "Addition: " . ($num1 + $num2) . "<br>";
    echo "Subtraction: " . ($num1 - $num2) . "<br>";
    echo "Multiplication: " . ($num1 * $num2) . "<br>";
    echo "Division: " . ($num1 / $num2) . "<br>";
    echo "Modulus: " . ($num1 % $num2) . "<br>";
    echo "</div>";
    
    // Float operations
    echo "<div class='result'>";
    echo "<h3>Float Operations (12.5 and 4.2):</h3>";
    echo "Addition: " . ($float1 + $float2) . "<br>";
    echo "Subtraction: " . ($float1 - $float2) . "<br>";
    echo "Multiplication: " . ($float1 * $float2) . "<br>";
    echo "Division: " . ($float1 / $float2) . "<br>";
    echo "</div>";
    echo '</div>';
    
    // ====================
    // PART 3: Echo and Print
    // ====================
    echo '<div class="section">';
    echo '<h2>3. Output using echo and print</h2>';
    
    $number1 = 25;
    $number2 = 35;
    $sum = $number1 + $number2;
    
    echo "<div class='result'>";
    echo "<h3>Using echo:</h3>";
    echo "The sum of $number1 and $number2 is: " . $sum;
    echo "</div>";
    
    echo "<div class='result'>";
    echo "<h3>Using print:</h3>";
    print "The sum of $number1 and $number2 is: " . $sum;
    echo "</div>";
    echo '</div>';
    
    // ====================
    // PART 4: Using var_dump()
    // ====================
    echo '<div class="section">';
    echo '<h2>4. Using var_dump() to Display Variable Types and Values</h2>';
    
    echo "<div class='result'>";
    echo "<h3>var_dump() output:</h3>";
    echo "<pre>";
    echo "String variable: ";
    var_dump($stringVar);
    echo "\nInteger variable: ";
    var_dump($integerVar);
    echo "\nFloat variable: ";
    var_dump($floatVar);
    echo "\nBoolean variable: ";
    var_dump($booleanVar);
    echo "\nSum variable: ";
    var_dump($sum);
    echo "</pre>";
    echo "</div>";
    echo '</div>';
    ?>
</body>
</html>