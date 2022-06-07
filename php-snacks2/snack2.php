<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$chiocciola = "@";
$punto = ".";

$logged = "Accesso riuscito";
$blocked = "Accesso negato";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <h1>SNACK 2</h1>

    <?php
    if(empty($name) || empty($mail) || empty($age)){
        echo $blocked;
    }elseif(strlen($name) < 3){
        echo $blocked;
    }elseif(!strpos($mail, $chiocciola) || !strpos($mail, $punto)){
        echo $blocked;
    }elseif(!is_numeric($age)){
        echo $blocked;
    }else{
        echo $logged;
    }
    ?>
</body>
</html>