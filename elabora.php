<?php
$dictionary = "";
$lenght = $_GET["lenght"];
$password = "";


while (strlen($password) < $lenght) {
    $lungDizionario = strlen($dictionary) - 1;
    $numeroCasuale = rand(0, $lungDizionario);
    $password .= $dictionary[$numeroCasuale];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>La tua password è:</h1>
    <h2>La tua password è <?= $password ?> </h2>
    <h3>Hai richiesto una password lunga <?= $lenght ?> caratteri </h3>

</body>

</html>