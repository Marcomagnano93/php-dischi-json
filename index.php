<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <div id="app">
    <header>
        <div class="container-fluid text-center bg-primary py-3">
            <h1>Catalogo CD</h1>
        </div>
    </header>
    <main class="container-fluid py-5 bg-danger-subtle">
        <div class="container">
            <div class="row gap-3">
                <div class="card p-3 bg-info-subtle" style="width: 300px;" 
                v-for="disc in discs"
                @click="openModal(disc)"
                >
                    <img :src="disc.poster" class="card-img-top" alt="disc poster image">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{ disc.title }}</h3>
                        <p class="card-text">Autore: {{ disc.author }}</p>
                        <p class="card-text">Anno di rilascio: {{ disc.year }}</p>
                        <p class="card-text">Genere: {{ disc.genre }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div 
        
        class="container-fluid" @click="openModal()"
        v-if="modalOpen === true"
        >
            <div class="modal-fullscreen bg-info position-absolute top-0 start-0" tabindex="-1">
                <div class="container d-flex justify-content-center">
                <div class="card p-3 bg-info-subtle" style="width: 500px; height: 100vh;" >
                    <img :src="modalDisc.poster" class="card-img-top" alt="disc poster image">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{ modalDisc.title }}</h3>
                        <p class="card-text">Autore: {{ modalDisc.author }}</p>
                        <p class="card-text">Anno di rilascio: {{ modalDisc.year }}</p>
                        <p class="card-text">Genere: {{ modalDisc.genre }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
  </div>
<script src="./js/app.js"></script>
</body>
</html>