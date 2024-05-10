<?php

include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Movie.php';
include_once __DIR__ . '/Models/TvSerie.php';

// $productions = [

//     new Production('Ritorno al futuro', 'Inglese', 9, new Genre('Zemekis', 'viaggio nel tempo')),
//     new Production('Titanic', 'Inglese', 8, new Genre('Cameron', 'drammatico')),
//     new Production('Interstellar','inglese', 7.5, new Genre('Nolan','fantascenza')),
// ];

$movies = [
    new Movie('Ritorno al futuro', 'Inglese', 9, new Genre('Zemekis', 'viaggio nel tempo'), 1000000, 90),
    new Movie('Titanic', 'Inglese', 8, new Genre('Cameron', 'drammatico'), 1300000, 120),
    new Movie('Interstellar','inglese', 7.5, new Genre('Nolan','fantascenza'), 800000, 110),
    new TvSerie('Friends', 'inglese', 9, new Genre('boh', 'amici che convivono'), 12),
    new TvSerie('Gilmore girls', 'inglese', 8, new Genre('boh', 'mamma e figlia'), 8),
    new TvSerie('Sons of anarchy', 'inglese', 8, new Genre('boh', 'club motociclisti'), 16),
    new TvSerie('Sex and the city', 'inglese', 7, new Genre('boh', 'mosa e amicha a new york'), 20),
    new TvSerie('The ranch', 'inglese', 6, new Genre('boh', 'famiglia di allevatori'), 7),
];

header('Content-type: application/json');
echo json_encode($movies);


$data = [
  
    'res' => $movies,
    'success' => true
];
json_encode($data);

// echo $productions;