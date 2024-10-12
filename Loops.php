<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities in PHP</title>
</head>
<body>
    <h1>PHP Activities</h1>

    <!-- Activity 1: Number Counter -->
    <h2>Activity 1: Number Counter (Even numbers between 1 and 20)</h2>
    <p>
    <?php
    $counter1 = 2;
    while ($counter1 <= 20) {
        echo $counter1 . " ";
        $counter1 += 2;
    }
    ?>
    </p>

    <!-- Activity 2: Password Validator -->
    <h2>Activity 2: Password Validator</h2>
    <form method="POST" action="">
        <label for="password">Please enter the password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Submit</button>
    </form>
    <p>
    <?php
    $correct_password = "password123";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
        $user_input = $_POST['password'];
        if ($user_input === $correct_password) {
            echo "Access Granted.";
        } else {
            echo "Incorrect password.";
        }
    }
    ?>
    </p>

    <!-- Activity 3: Multiplication Table of 7 -->
    <h2>Activity 3: Multiplication Table of 7</h2>
    <p>
    <?php
    for ($multiplier = 1; $multiplier <= 10; $multiplier++) {
        echo "7 x $multiplier = " . (7 * $multiplier) . "<br>";
    }
    ?>
    </p>

    <!-- Activity 4: Loop Control with break and continue -->
    <h2>Activity 4: Loop Control</h2>
    <p>
    <?php
    for ($num1 = 1; $num1 <= 10; $num1++) {
        if ($num1 == 5) {
            continue;
        }
        if ($num1 == 8) {
            break;
        }
        echo $num1 . " ";
    }
    ?>
    </p>

    <!-- Activity 5: Sum of Numbers from 1 to 100 -->
    <h2>Activity 5: Sum of Numbers from 1 to 100</h2>
    <p>
    <?php
    $sum1 = 0;
    $num2 = 1;
    while ($num2 <= 100) {
        $sum1 += $num2;
        $num2++;
    }
    echo "The sum of numbers from 1 to 100 is: $sum1";
    ?>
    </p>

    <!-- Activity 6: Array Iteration with foreach -->
    <h2>Activity 6: Favorite Movies</h2>
    <p>
    <?php
    $movies_list = ["Harry Potter Series", "Star Wars Series", "The Matrix", "Pirates of the Caribbean", "John Wick Series"];
    foreach ($movies_list as $index => $movie) {
        echo ($index + 1) . ". $movie<br>";
    }
    ?>
    </p>

    <!-- Activity 7: Key-Value Pairs with foreach -->
    <h2>Activity 7: Student Information</h2>
    <p>
    <?php
    $student_data = [
        "Name" => "Aubrey",
        "Age" => 22,
        "Grade" => "A",
        "City" => "Baguio"
    ];
    foreach ($student_data as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>
    </p>

    <!-- Activity 8: Factorial Calculator -->
    <h2>Activity 8: Factorial of 5</h2>
    <p>
    <?php
    $factorial_num = 5;
    $factorial_result = 1;
    for ($i = $factorial_num; $i >= 1; $i--) {
        $factorial_result *= $i;
    }
    echo "Factorial of $factorial_num is: $factorial_result";
    ?>
    </p>

    <!-- Activity 9: FizzBuzz Challenge -->
    <h2>Activity 9: FizzBuzz</h2>
    <p>
    <?php
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
    ?>
    </p>

    <!-- Activity 10: Prime Number Checker -->
    <h2>Activity 10: Prime Number Checker</h2>
    <form method="POST" action="">
        <label for="number">Enter a number to check if it's prime:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Submit</button>
    </form>
    <p>
    <?php
    function is_prime($number) {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['number'])) {
        $user_input = intval($_POST['number']);
        if (is_prime($user_input)) {
            echo $user_input . " is a prime number.";
        } else {
            echo $user_input . " is not a prime number.";
        }
    }
    ?>
    </p>

    <!-- Activity 11: Fibonacci Sequence -->
    <h2>Activity 11: Fibonacci Sequence</h2>
    <p>
    <?php
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
    ?>
    </p>

    <!-- Activity 12: Reverse a String -->
    <h2>Activity 12: Reverse String</h2>
    <p>
    <?php
    $string_to_reverse = "Hello";
    $reversed_string = "";

    for ($i = strlen($string_to_reverse) - 1; $i >= 0; $i--) {
        $reversed_string .= $string_to_reverse[$i];
    }

    echo "Input: \"$string_to_reverse\"<br>";
    echo "Output: \"$reversed_string\"";
    ?>
    </p>
</body>
</html>
