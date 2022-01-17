<?php 
require_once __DIR__."/Movie.php";
require_once __DIR__."/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>
<body>
  
  <?php foreach ($movies as $movie) :
  $new_movie = new Movie($movie["title"], $movie["genre"], $movie["year"], $movie["duration"]);
  $new_movie->plot = $movie['plot'];
  $new_movie->director = $movie['director'];
  $new_movie->writers = $movie['writers'];
  $new_movie->stars = $movie['stars'];
  $new_movie->rating = $movie['rating'];
  ?>
  <div>
    <h2><?php echo $new_movie->title ?></h2>
    <span><strong><?php echo $new_movie->genre ?></strong></span>
    <span><strong><?php echo $new_movie->year ?></strong></span>
    <span><strong><?php echo $new_movie->duration ?></strong></span>
    <p><?php echo $new_movie->getExcept() ?></p>
    <h5>Regia: <?php echo $new_movie->director ?></h5>
    <h5>Scrittori: <?php echo $new_movie->writers ?></h5>
    <h5>Attori: <?php echo $new_movie->stars ?></h5>
    <h5>Voto: <?php echo $new_movie->rating ?></h5>
  </div>
  <?php endforeach; ?>
</body>
</html>