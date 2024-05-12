<?php
include_once __DIR__ . '/Production.php';
include_once __DIR__ . '/Genre.php';

class Movie extends Production
{
    public $profits;
    public $duration;

    function __construct($_title, $_language, $_vote, $_poster, Genre $_genre, int $_profits, int $_duration)
    {
        parent::__construct($_title, $_language, $_vote, $_poster, $_genre);
        $this->profits = $_profits;
        $this->duration = $_duration;
    } 
}
