<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

$accesso = "";
$regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";



if (strlen($name) > 3 && preg_match($regex, $email) && ($age !== "" && $age >= 1)) {
    $accesso = "Accesso riuscito";
} else {
    $accesso = "Accesso negato";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inserisci i dati</h1>
    <form action="" method="GET">
        <input type="text" name="name" placeholder="inserisci il nome">
        <input type="email" name="email" placeholder="inserisci l'email">
        <input type="number" name="age" placeholder="inserisci l'età">
        <button type="submit">Verifica</button>
    </form>
    <p><?= $accesso ?></p>
</body>
</html>