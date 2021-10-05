<?php

require_once __DIR__ . '/models/movies.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Document</title>
</head>

<body>
   <header>
      <h1>MOVIES</h1>
   </header>
   <main class="container">
      <!-- Movie Dune -->
      <section id="movie-1" class="movie">
         <figure>
            <a href="#"><img src="<?= $movie_1->image ?>" alt="<?= $movie_1->title ?>"></a>
         </figure>
         <div class="description">
            <h2><?= $movie_1->title ?></h2>
            <address>Diretto:<?= $movie_1->director ?>;</address>
            <span><strong>Genere:</strong> <?= $movie_1->genres ?>; </span>
            <p>Trama: <br><?= $movie_1->plot ?></p>
            <span>Durata film: <?= $movie_1->duration ?></span>
         </div>
      </section>
      <!-- Movie FAST and FURIOUS -->
      <section id="movie-2" class="movie">
         <figure>
            <a href="#"><img src="<?= $movie_2->image ?>" alt="<?= $movie_2->title ?>"></a>
         </figure>
         <div class="description">
            <h2><?= $movie_2->title ?></h2>
            <address>Diretto:<?= $movie_2->director ?>;</address>
            <span><strong>Genere:</strong> <?= $movie_2->genres ?>; </span>
            <p>Trama: <br><?= $movie_2->plot ?></p>
            <span>Durata film: <?= $movie_2->duration ?></span>
         </div>
      </section>
      <!-- Movie THE SUICIDE SQUAD - MISSIONE SUICIDA -->
      <section id="movie-3" class="movie">
         <figure>
            <a href="#"><img src="<?= $movie_3->image ?>" alt="<?= $movie_3->title ?>"></a>
         </figure>
         <div class="description">
            <h2><?= $movie_3->title ?></h2>
            <address>Diretto:<?= $movie_3->director ?>;</address>
            <span><strong>Genere:</strong> <?= $movie_3->genres ?>; </span>
            <p>Trama: <br><?= $movie_3->plot ?></p>
            <span>Durata film: <?= $movie_3->duration ?></span>
         </div>
      </section>
   </main>
</body>

</html>