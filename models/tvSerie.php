<?php
include_once __DIR__ . '/Production.php';
include_once __DIR__ . '/Genre.php';

class TvSerie extends Production
{
    public $numberOfSeasons;
    function __construct($_title, $_language, $_vote, $_poster, Genre $_genre, int $_numberOfSeasons)
    {
        parent::__construct($_title, $_language, $_vote, $_poster, $_genre);
        $this->numberOfSeasons = $_numberOfSeasons;
        
    } 
}

// $serie1 = new TvSerie('big bang theory', 'inglese', 7, new Genre('boh', 'amici nerd'), 6);
// var_dump($serie1);
