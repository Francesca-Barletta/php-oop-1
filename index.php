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



$movie1 = new Production('Ritorno al futuro', 'Inglese', 9);
$movie2 = new Production('Titanic', 'Inglese', 8);
$movie3 = new Production('Interstellar','inglese', 7.5);

// var_dump($movie1, $movie2, $movie3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <header>
                <div class="container">
                    <h1>{{ message }}</h1>
                </div>
        </header>
        <main>
          <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <div class="card-header">
                        <?= $movie1->title; ?>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Lingua:  <?= $movie1->language; ?></li>
                        <li class="list-group-item">Voto:  <?= $movie1->vote; ?></li>
                      </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <div class="card-header">
                      <?= $movie2->title; ?>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Lingua: <?= $movie2->language; ?></li>
                        <li class="list-group-item">Voto: <?= $movie2->vote; ?></li>
                      </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <div class="card-header">
                      <?= $movie3->title; ?>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Lingua: <?= $movie3->language; ?></li>
                        <li class="list-group-item">Voto: <?= $movie3->vote; ?></li>
                      </ul>
                    </div>
                </div>
               
            </div>
          </div>
        </main>
    </div>
<script>
</script>
<script src="./js/app.js"></script>
</body>
</html>
