<?php
include_once __DIR__ . '/production.php';
include_once __DIR__ . '/genre.php';

class Movie extends Production
{
    public $profits;
    public $duration;
    function __construct($_title, $_language, $_vote, Genre $_genre, int $_profits, int $_duration)

    parent:: __construct($_title, $_language, $_vote, Genre $_genre);
    {
        $this->profits = $_profits;
        $this->duration = $_duration;
    } 
}

$ciao = new Movie('questo', 'dovrebbe', 1, 'essere', "un'istanza di movie", 3, 4 );

var_dump($ciao);