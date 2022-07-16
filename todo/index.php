<?php

include 'dbconnect.php';
?>
<!doctype html>
<html lang="tr">
  <head>
    <style>
        h1{
            text-align: center;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Todo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Todo</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="list.php?todo=Yapılacaklar">Yapılacaklar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php?todo=Tamamlananlar">Tamamlananlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="list.php?todo=Hepsi">Hepsi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card my-5 mx-5 col-sm-11" >
        <div class="card-header"> Featured </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul>
    </div>

  </body>
</html>