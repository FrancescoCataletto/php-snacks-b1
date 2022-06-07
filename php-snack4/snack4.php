<?php

function randomNumbers($min, $max, $numLimit){
    $randomNumsArr = [];

    while(count($randomNumsArr) < $numLimit){
        $randomNumber = rand($min, $max);
        if(!in_array($randomNumber, $randomNumsArr)){
            $randomNumsArr[] = $randomNumber;
        }
    }
    return $randomNumsArr;
};

$numLimit = 15;

$randomizedArr = randomNumbers(1, 100, $numLimit);

var_dump($randomizedArr);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <h1>SNACK 4</h1>

    <p><?php
    foreach($randomizedArr as $number){
        echo "<p>$number</p>";
    }
    ?></p>
</body>
</html>