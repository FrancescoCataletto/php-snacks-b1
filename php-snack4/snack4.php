<?php

$randomNumsArr = [];

$numLimit = 15;


for($i = 0; $i <= $numLimit; $i++){
    $randomNum = rand(1, 100);
    $randomNumsArr[] = $randomNum;
};

var_dump($randomNumsArr);
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
</body>
</html>