<div class="container-movies">

<?php foreach($movies as $movie):
$new_movie = new Movie($movie["title"], $movie["genre"], $movie["year"], $movie["director"]);
$new_movie->overview = $movie["overview"];
$new_movie->cast = $movie["cast"];
$new_movie->poster = $movie["poster"];
?>

<div class="card-movie">
  <h2><?php echo $new_movie->title ?></h2>
  <img class="poster" src="<?php echo $new_movie->poster ?>" alt="">
  <p><strong>Genere: </strong><?php echo $new_movie->genre ?></p>
  <p><strong>Anno: </strong><?php echo $new_movie->year ?></p>
  <p><strong>Regista: </strong><?php echo $new_movie->director ?></p>

  <p>
    <strong>Cast: </strong>
    <?php foreach($new_movie->cast as $actor): ?>
    <?php echo $actor ?>
    <?php endforeach ?>
  </p>
  

  <h4>Panoramica:</h4>
  <p><?php echo $new_movie->getOverviewCutted(95) ?></p>

</div>
<?php endforeach ?>
</div>