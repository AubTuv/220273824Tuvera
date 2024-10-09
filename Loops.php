<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Activity 1: Number Counter (Even numbers between 1 and 20)
echo "Activity 1: Number Counter\n";
$counter1 = 2;
while ($counter1 <= 20) {
    echo $counter1 . " ";
    $counter1 += 2;
}
echo "\n\n";

// Activity 2: Password Validator
echo "Activity 2: Password Validator\n";
$correct_password = "password123";
do {
    $user_input = readline("Please enter the password: ");
    if ($user_input != $correct_password) {
        echo "Incorrect password.\n";
    }
} while ($user_input != $correct_password);
echo "Access Granted.\n\n";

// Activity 3: Multiplication Table of 7
echo "Activity 3: Multiplication Table of 7\n";
for ($multiplier = 1; $multiplier <= 10; $multiplier++) {
    echo "7 x $multiplier = " . (7 * $multiplier) . "\n";
}
echo "\n";

// Activity 4: Loop Control with break and continue
echo "Activity 4: Loop Control\n";
for ($num1 = 1; $num1 <= 10; $num1++) {
    if ($num1 == 5) {
        continue;
    }
    if ($num1 == 8) {
        break;
    }
    echo $num1 . " ";
}
echo "\n\n";

// Activity 5: Sum of Numbers from 1 to 100
echo "Activity 5: Sum of Numbers from 1 to 100\n";
$sum1 = 0;
$num2 = 1;
while ($num2 <= 100) {
    $sum1 += $num2;
    $num2++;
}
echo "The sum of numbers from 1 to 100 is: $sum1\n\n";

// Activity 6: Array Iteration with foreach
echo "Activity 6: Favorite Movies\n";
$movies_list = ["Harry Potter Series", "Star Wars Series", "The Matrix", "Pirates of the Caribbean", "John Wick Series"];
foreach ($movies_list as $index => $movie) {
    echo ($index + 1) . ". $movie\n";
}
echo "\n";

// Activity 7: Key-Value Pairs with foreach
echo "Activity 7: Student Information\n";
$student_data = [
    "Name" => "Aubrey",
    "Age" => 22,
    "Grade" => "A",
    "City" => "Baguio"
];
foreach ($student_data as $key => $value) {
    echo "$key: $value\n";
}
echo "\n";

// Activity 8: Factorial Calculator
echo "Activity 8: Factorial of 5\n";
$factorial_num = 5;
$factorial_result = 1;
for ($i = $factorial_num; $i >= 1; $i--) {
    $factorial_result *= $i;
}
echo "Factorial of $factorial_num is: $factorial_result\n\n";

// Activity 9: FizzBuzz Challenge
echo "Activity 9: FizzBuzz\n";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
echo "\n\n";

// Activity 10: Prime Number Checker
echo "Activity 10: Prime Number Checker\n";
$prime_num = readline("Enter a number to check if it's prime: ");
$prime_num = (int)$prime_num;  
$is_prime = true;

if ($prime_num < 2) {
    $is_prime = false;
} else {
    for ($i = 2; $i <= sqrt($prime_num); $i++) {
        if ($prime_num % $i == 0) {
            $is_prime = false;
            break;
        }
    }
}

if ($is_prime) {
    echo "$prime_num is a prime number.\n";
} else {
    echo "$prime_num is not a prime number.\n";
}
echo "\n";

// Activity 11: Fibonacci Sequence
echo "Activity 11: Fibonacci Sequence\n";
$fib1 = 0;
$fib2 = 1;
$sequence_count = 10; 

echo "$fib1 $fib2 ";

for ($i = 2; $i < $sequence_count; $i++) {
    $next_fib = $fib1 + $fib2;
    echo "$next_fib ";
    $fib1 = $fib2;
    $fib2 = $next_fib;
}
echo "\n\n";

// Activity 12: Reverse a String
echo "Activity 12: Reverse String\n";
$string_to_reverse = "Hello";
$reversed_string = "";

for ($i = strlen($string_to_reverse) - 1; $i >= 0; $i--) {
    $reversed_string .= $string_to_reverse[$i];
}

echo "Input: \"$string_to_reverse\"\n";
echo "Output: \"$reversed_string\"\n";

?>




</body>
</html>