<?php

include __DIR__ . '/data/movies.php';
include __DIR__ . '/models/Movie.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
</head>
<body>
<?php foreach($movies as $movie) : 
    $m = new Movie($movie['title'], $movie['plot'], $movie['duration'], $movie['category'],);
    ?>
    <section>
        <h2><?= $m->title ?></h2>
        <p><?= $m->getExtract() ?></p>
        <div><?= $m->duration ?></div>
        <div><?= $m->category ?></div>
    </section>
     
<?php endforeach; ?>
</body>
</html>