<?php
    // richiedo da movie.php
    require_once __DIR__ . '/classes/Movie.php';
    // do info alla classe
    $movies = [
        new Movie('Doctor Strange', 'Sam Raimi', 2022,  126, 15),
        new Movie('Avatar', 'James Cameron', 2009, 160, 10),
    ]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie</title>
    </head>
    <body>
        <ul>
            <!-- ciclo i film -->
            <?php foreach($movies as $movie) { ?>
            <li>
                <!-- stampo le varie variabili -->
            <h2><?php echo $movie->title ?></h2>
            <h4><?php echo $movie->movieDirector ?></h4>
            <p>Release date: <?php echo $movie->year ?></p>
            <p>Film duration: <?php echo $movie->duration ?></p>
            <p>Price: <?php echo $movie->price ?></p>
            </li>
            <!-- if x il prezzo in base alla data di uscita del film -->
            <?php if($movie->discount !== 0) { ?>
            <strong>discount: <?php echo $movie->discount; ?></strong>
            <?php } ?>
            
            <?php } ?>
        </ul>     
    </body>
</html>