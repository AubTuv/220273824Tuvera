<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Act1
$counter=1;
while($counter<=20){
    if($counter%2==0){
        echo $counter." ";
    }$counter++;
}
echo "/n";

//Act2
do{
    $input=readline("Please enter the password: ");
}while($input != "password123");
echo "Access Granted";
echo "/n";

//Act3
<?php
for ($x = 1; $x <= 10; $x++) {
	$z=$x*7;
    echo "7 x ".$x." =".$z."/n";
  }
?>

//Act 4
for ($y = 1; $y <= 10; $y++) {    
	if ($y==5)continue;
    if ($y==8)break;
    echo $y." ";

  }

//Act 5
$number=1;
$sum=0;
while($number<=100){
    $sum=$sum+$number;
    $number++;
}
echo "The sum of numbers from 1 to 100 is: ".$sum;

//Act6
$bullet=1;
$movie = array("Harry potter", "John Wick", "The Matrix", "Django", "Avatar");
foreach ($movie as $a) {
  echo $bullet.". $a /n";
    $bullet++;
}

//Act7
$identity = array("Name"=>"Alice", "Age"=>"20", "Grade"=>"A", "City"=>"Baguio");
foreach ($identity as $b => $c) {
  echo "$b : $c </n";
}

//Act8
$product=1;
for ($factorial = 5; $factorial >=1; $factorial--) {    
	$product=$product*$factorial;

  }
  echo "Factorial of 5 is: ". $product;

//Act9
for ($multiplicity= 1; $multiplicity <=50; $multiplicity++) {    
	if($multiplicity%5==0 && $multiplicity%3==0){
    echo "FizzBuzz ";}else if($multiplicity%3==0){
    echo "Fizz ";}else if($multiplicity%5==0){
    echo "Buzz ";}else{echo $multiplicity." ";}

  }

//Act10
for ($constant=1; $constant<=2; $constant++) {    
	$insert=readline("Enter number: ");
    $prime=IsPrime($insert);
    if ($prime == 0)
    echo $insert.'is not a prime number' . "<br>";
else
    echo $insert.' is a prime number' . "<br>";
  }



?>




</body>
</html>