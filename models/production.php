<?php
include_once __DIR__ . '/Genre.php';

class Production 
{
    public $title;
    public $language;
    public $vote;
    public $genre;
    public $poster;
    function __construct($_title, $_language, $_vote, $_poster, Genre $_genre)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setvote($_vote);
        $this->poster = $_poster;
        $this->genre = $_genre;
        
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