<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscador</title>
  <!-- AJAX o JQuery?? -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="./styles/horoscopos.css">
  <link rel="stylesheet" href="https://alfred024.github.io/CSS-mio/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- JS -->
  <script src="./js/horoscopos.js"></script>
</head>

<body>
  <div class="width-80 margin-auto padding-20 border-radius-10 box-shadow-light">
    <h1 class="">Buscador tu signo para obtener tu horóscopo</h1>
    <div class="text-align-center margin-bottom-10">
      <input onkeypress="return horoscopos()" class="padding-10 border-radius-10 width-60" type="text" id="searchInput" placeholder="Buscar...">
      <!-- <button onclick="return horoscopos()" id="searchButton">Encuentra tu signo zodiacal</button> -->
    </div>

    <!-- RESULTADOS BÚSQUEDA -->
    <div id="resultsContainer" class="results-container">
      
    </div>
    
  </div>
</body>
</html>
