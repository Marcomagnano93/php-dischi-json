<?php
//assegno a una variabile il contenuto del file json come stringa
$data = file_get_contents('dischi.json');

//traduco la variabile data in php (array associativo)
$discs = json_decode($data, true);

header('Content-type: application/json');

$res = [
    'results' => $discs,
];

echo json_encode($res);