<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
            <div class="row row-cols-3">
                <div class="col py-2" v-for="movie in movies">
                    <div class="card" style="width: 18rem;">
                    <img :src="movie.poster" class="card-img-top" style="width: 100%;" alt="">
                      <div class="card-body"> 
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"> {{ movie.title }}</li>
                          <li class="list-group-item">Lingua: {{ movie.language }}  </li>
                          <li class="list-group-item">Voto: {{ movie.vote }}</li>
                          <li class="list-group-item">Regista: {{ movie.genre.name }}</li>
                          <li class="list-group-item">Descrizione: {{ movie.genre.description }}</li>
                          <li v-if="movie.profits" class="list-group-item">Profitti: {{ movie.profits }}</li>
                          <li v-if="movie.duration" class="list-group-item">Durata: {{ movie.duration }}</li>
                          <li v-if="movie.numberOfSeasons" class="list-group-item">Stagioni: {{ movie.numberOfSeasons }}</li>
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
