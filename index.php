<?php

include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/db.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies OOP and Objects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <div class="container py-5">
        <div class="row row-cols-3">

            <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="<?= $movie->coverImage ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3><?= $movie->title ?></h3>
                            <ul>
                                <li>Cast: <?= $movie->cast ?></li>
                                <li>Rating: <?= $movie->rating ?></li>
                                <li>Language: <?= $movie->language ?></li>
                                <li>Adult: <?= $movie->adult ?></li>
                                <li>Release date: <?= $movie->releaseDate ?></li>
                                <li>Genres: <?php foreach ($movie->genres as $genre) echo $genre . ","  ?></li>
                            </ul>
                            <p class="card-text"><?= $movie->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>

    </div>


</body>

</html>