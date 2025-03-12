<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
    $a = 15;
    $b = 7;
    echo "<h1> Exercise 1: Variables and Operators </h1>";
    echo "Sum: " . ($a + $b) . "\n";
    echo "Difference: " . ($a - $b) . "\n";
    echo "Product: " . ($a * $b) . "\n";
    echo "Quotient: " . ($a / $b) . "\n";

    echo "<h1> Exercise 2: Conditional Statements</h1>";
    $number = 10; 


    if ($number % 2 == 0) {
        echo "$number is even.\n";
    } else {
        echo "$number is odd.\n";
    }

  
    if ($number > 0) {
        echo "$number is positive.\n";
    } elseif ($number < 0) {
        echo "$number is negative.\n";
    } else {
        echo "$number is zero.\n";
    }

    echo "<h1> Exercise 3: Loops </h1>";
  
echo "<h3>FizzBuzz Output: </h3>\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo "$i\n";
    }
}

echo "<h3>\nEven Numbers in First 10 Fibonacci Sequence:</h3>\n";

$fib1 = 0;
$fib2 = 1;

for ($i = 1; $i <= 10; $i++) {
    $fib = $fib1 + $fib2;
    if ($fib % 2 == 0) {
        echo "$fib\n";
    }
    $fib1 = $fib2;
    $fib2 = $fib;
}

echo "<h1> Exercise 4: Functions </h1>";
function greet($name) {
    return "Hello, $name! Welcome!\n";
}


function square($number) {
    return $number * $number;
}

echo greet("John");
echo "Square of 5: " . square(5) . "\n";


?>

    
</body>
</html>