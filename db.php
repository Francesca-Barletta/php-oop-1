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
    new Movie('Ritorno al futuro', 'Inglese', 9,'https://static.posters.cz/image/1300/poster/ritorno-al-futuro-film-i149545.jpg', new Genre('Zemekis', 'viaggio nel tempo'), 1000000, 90),
    new Movie('Titanic', 'Inglese', 8, 'https://m.media-amazon.com/images/I/71kfzNYWKxL._AC_UF894,1000_QL80_.jpg', new Genre('Cameron', 'drammatico'), 1300000, 120),
    new Movie('Interstellar','inglese', 7.5, 'https://static.posters.cz/image/750/poster/interstellar-ice-walk-i23290.jpg', new Genre('Nolan','fantascenza'), 800000, 110),
    new TvSerie('Friends', 'inglese', 9, 'https://images-cdn.ubuy.ae/634d3aaf76c6c057d716c8e7-trends-international-friends-apartment.jpg', new Genre('boh', 'amici che convivono'), 12),
    new TvSerie('Gilmore girls', 'inglese', 8, 'https://m.media-amazon.com/images/I/91xBqn6NBAL._AC_UF1000,1000_QL80_.jpg', new Genre('boh', 'mamma e figlia'), 8),
    new TvSerie('Sons of anarchy', 'inglese', 8, 'https://static.posters.cz/image/750/poster/sons-of-anarchy-vintage-i16226.jpg', new Genre('boh', 'club motociclisti'), 16),
    new TvSerie('Sex and the city', 'inglese', 7, 'https://static.posters.cz/image/750/poster/sex-in-the-city-scyscraper-i3286.jpg', new Genre('boh', 'mosa e amicha a new york'), 20),
    new TvSerie('The ranch', 'inglese', 6, 'https://www.tvguide.com/a/img/catalog/provider/1/1/1-8938435842.jpg', new Genre('boh', 'famiglia di allevatori'), 7),
];

header('Content-type: application/json');
echo json_encode($movies);


$data = [
  
    'res' => $movies,
    'success' => true
];
json_encode($data);

// echo $productions;