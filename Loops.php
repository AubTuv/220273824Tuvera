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

$input=readline("Please enter the password: ");

//Act2
do{
    $input=readline("Please enter the password: ");
}while($input != "password123");
echo "Access Granted";


//Act3
//Act3
for ($x = 0; $x <= 10; $x++) {
    echo "7 x ".$x." =".$x*7."<br />";
  }

?>


</body>
</html>