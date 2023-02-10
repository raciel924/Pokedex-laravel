
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script
        src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <title>Pokedex</title>
</head>

<body>
   
   
    <div class=" mt-4 poke-card shadow">
        <h2>Pokedex</h2>
        <div>
            <p class="fs-4" id="nombre-pokemon"></p>
        </div>
        <div>
            <img class="pokemon-img" id="pokemon-img" src="">
        </div>
        <div>
            <p class="fs-5 mt-4">Tipo:</p>
            <div id="pokemon-tipo"></div>
        </div>
        <button class="btn btn-primary  m-4" id="btn-mostrar">Mostrar Pokemón</button>
    </div>

</body>
<script src=" {{asset('js/consumoAPI.js')}}"></script>

</html>