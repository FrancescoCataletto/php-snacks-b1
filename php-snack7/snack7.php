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
        foreach($arrStudenti as $student){
            echo $student["nome"] . " " . $student["cognome"] . " - " . "media voti: " . $student["voti"][1] . "<br>";
        }
        ?>
    </p>
</body>
</html>