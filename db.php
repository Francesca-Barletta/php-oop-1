<?php

class Production
{
    public $title;
    public $language;
    public $vote;
    function __construct($_title, $_language, $_vote )
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setvote($_vote);

    }

    public function setvote($vote)
    {
    
    if(is_numeric($vote) && $vote <= 10 && $vote >= 1){
        $this->vote = intval($vote);
    } else {
        var_dump('valore accettato solo da 1 a 10');
    }
    }
}

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