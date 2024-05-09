<?php

include __DIR__ . './models/production.php';

$productions = [

    $movie1 = new Production('Ritorno al futuro', 'Inglese', 9),
    $movie2 = new Production('Titanic', 'Inglese', 8),
    $movie3 = new Production('Interstellar','inglese', 7.5),
];

header('Content-type: application/json');
echo json_encode($productions);

$data = [
    'res' => $productions,
    'success' => true
];

json_encode($data);
// var_dump($productions);