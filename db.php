<?php

include_once __DIR__ . '/models/production.php';

$productions = [

    $movie1 = new Production('Ritorno al futuro', 'Inglese', 9, new Genre('Zemekis', 'viaggio nel tempo')),
    $movie2 = new Production('Titanic', 'Inglese', 8, new Genre('Cameron', 'drammatico')),
    $movie3 = new Production('Interstellar','inglese', 7.5, new Genre('Nolan','fantascenza')),
];

header('Content-type: application/json');
echo json_encode($productions);

$data = [
    'res' => $productions,
    'success' => true
];

json_encode($data);
// echo $productions;