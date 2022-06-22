<?php
$matchs = [
    [
        "squadraCasa" => "Celtics",
        "squadraOspite" => "Golden States",
        "punteggioCasa" => "112",
        "punteggioOspite" => "120",
    ],
    [
        "squadraCasa" => "Nets",
        "squadraOspite" => "Bucks",
        "punteggioCasa" => "130",
        "punteggioOspite" => "129",
    ],
    [
        "squadraCasa" => "Heat",
        "squadraOspite" => "Suns",
        "punteggioCasa" => "110",
        "punteggioOspite" => "100",
    ],
];

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
    <h1>Partite disputate</h1>
    <ul>
        <?php for ($i=0; $i < count($matchs); $i++) { ?>
            <li><?php echo $matchs[$i]["squadraCasa"] . "-" . $matchs[$i]["squadraOspite"] . "|" . $matchs[$i]["punteggioCasa"] . "-" . $matchs[$i]["punteggioOspite"]; ?></li>
        <?php } ?>            
    </ul>
</body>
</html>