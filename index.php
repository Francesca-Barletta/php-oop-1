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
    <div id="app" class="bg-secondary">
        <header>
            <?php include_once __DIR__.'/header.php'?>
        </header>
        <main>
          <div class="container">
            <div class="row row-cols-4 p-4">
                <div class="col mn-h-100 py-2" v-for="movie in productions">
                    <div class="card shadow bg-secondary h-100" @click="openModal(movie)">
                    <img :src="movie.poster" class="card-img-top" alt="">
                      <div class="card-body "> 
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item bg-secondary text-white"> {{ movie.title }}</li>
                          <li class="list-group-item bg-secondary text-white">Lingua: {{ movie.language }}  </li>
                          <li class="list-group-item bg-secondary text-white">Voto: {{ movie.vote }}</li>
                          <li class="list-group-item bg-secondary text-white">Regista: {{ movie.genre.name }}</li>
                          <li class="list-group-item bg-secondary text-white">Descrizione: {{ movie.genre.description }}</li>
                          <li v-if="movie.profits" class="list-group-item bg-secondary text-white">Profitti: {{ movie.profits }}</li>
                          <li v-if="movie.duration" class="list-group-item bg-secondary text-white">Durata: {{ movie.duration }}</li>
                          <li v-if="movie.numberOfSeasons" class="list-group-item bg-secondary text-white">Stagioni: {{ movie.numberOfSeasons }}</li>
                        </ul>
                    </div>
                </div>   
            </div>
          </div>

          <!--modal-->
          <div class="modal d-block" tabindex="-1" v-if="isOpen">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"> {{ movie.title }}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <img :src="movie.poster" class="modal-img" alt="">
                  <p> {{ movie.genre.description }}</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="closeModal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
        </main>
        <footer>
          <?php include 'footer.php'?>
        </footer>
    </div>
<script>
</script>
<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<style>
  .card-img-top{
    width: 100%;
    height: 400px;
    object-fit: cover;
    object-position: top;
}
.modal-img{
  width: 100%;
    height: 700px;
    object-fit: cover;
    object-position: center;
}
</style>
