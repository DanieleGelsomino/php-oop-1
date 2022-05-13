<?php
//phpinfo()

include_once __DIR__ . "/movie.php";
include_once __DIR__ . "/db_movie.php";

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP OOP 1</title>
</head>
<body>
    
<div class="container-movies">

<?php foreach($movies as $movie):
$new_movie = new Movie($movie["title"], $movie["genre"], $movie["year"], $movie["director"]);
$new_movie->overview = $movie["overview"];
$new_movie->cast = $movie["cast"];
?>

<div class="card-movie">
  <h2><?php echo $new_movie->title ?></h2>
  <p><strong>Genere: </strong><?php echo $new_movie->genre ?></p>
  <p><strong>Anno: </strong><?php echo $new_movie->year ?></p>
  <p><strong>Regista: </strong><?php echo $new_movie->director ?></p>

  <h4>Cast:</h4>
  <ul>
    <?php foreach($new_movie->cast as $actor): ?>
    <li><?php echo $actor ?></li>
    <?php endforeach ?>
  </ul>

  <h4>Panoramica:</h4>
  <p><?php echo $new_movie->overview ?></p>

</div>
<?php endforeach ?>
</div>






</body>
</html>

