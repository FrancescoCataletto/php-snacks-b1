<?php

$arrStudenti = [
    [
        "nome" => "Mario",
        "cognome" => "Rossi",
        "voti" => [4,6,7,8,4]
    ],
    [
        "nome" => "Giulio",
        "cognome" => "Verdi",
        "voti" => [3,8,6,9,6]
    ],
    [
        "nome" => "Marco",
        "cognome" => "Polo",
        "voti" => [5,6,7,6,7]
    ],
    [
        "nome" => "Paolo",
        "cognome" => "Brosio",
        "voti" => [5,9,7,8,7]
    ],
    
];

$sample = [];

$sample[] = $arrStudenti[1]["voti"];
var_dump($sample);
var_dump(array_sum($arrStudenti[0]["voti"]) / 5);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 7</title>
</head>
<body>
    <h1>SNACK 7</h1>

    <p>
        <?php
        for($i = 0; $i < count($arrStudenti); $i++){
            echo $arrStudenti[$i]["nome"] . " " . $arrStudenti[$i]["cognome"] . "<br>";
            for($j = 0; $j < count($arrStudenti[$i]["voti"]); $j++){
                echo $arrStudenti[$i]["voti"][$j] . "<br>";
            }  
        }
        ?>
    </p>
</body>
</html>