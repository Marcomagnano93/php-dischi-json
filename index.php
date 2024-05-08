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
    <main class="container">
        <div class="row">
            <div class="card"
            v-for="disc in discs"
            >
                disco
            </div>
        </div>
    </main>
  </div>
<script src="./js/app.js"></script>
</body>
</html>