<?php
include_once __DIR__ . '/production.php';
include_once __DIR__ . '/genre.php';

class TvSeries extends Production
{
    public $numberOfSeasons;
    function __construct($_title, $_language, $_vote, Genre $_genre, int $_numberOfSeasons)

    parent::__construct($_title, $_language, $_vote, Genre $_genre)
    {
        $this->numberOfSeasons = $_numberOfSeasons;
        
    } 
}