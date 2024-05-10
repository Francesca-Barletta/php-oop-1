<?php

include_once __DIR__ . '/models/production.php';
include_once __DIR__ . '/models/movie.php';
include_once __DIR__ . '/models/tvSerie.php';

// $productions = [

//     $movie1 = new Production('Ritorno al futuro', 'Inglese', 9, new Genre('Zemekis', 'viaggio nel tempo')),
//     $movie2 = new Production('Titanic', 'Inglese', 8, new Genre('Cameron', 'drammatico')),
//     $movie3 = new Production('Interstellar','inglese', 7.5, new Genre('Nolan','fantascenza')),
// ];

$movies = [
    $backToTheFuture = new Movie('Ritorno al futuro', 'Inglese', 9, new Genre('Zemekis', 'viaggio nel tempo'), 1000000, 90);
    $titanic = new Movie('Titanic', 'Inglese', 8, new Genre('Cameron', 'drammatico'), 1300000, 120);
    $interstellar = new Movie('Interstellar','inglese', 7.5, new Genre('Nolan','fantascenza'), 800000, 110);
]

header('Content-type: application/json');
echo json_encode($movies);

$data = [
    'res' => $movies,
    'success' => true
];

json_encode($data);
// echo $productions;