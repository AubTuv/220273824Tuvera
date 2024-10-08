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


?>




</body>
</html>