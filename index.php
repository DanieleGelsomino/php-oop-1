<?php
//phpinfo()
include_once __DIR__ . "/movie.php";
include_once __DIR__ . "/db_movie.php";

?>

<!DOCTYPE html>
<html lang="it">
<!-- includo l'head del template -->
<?php
include ('template.php');
?>

<body>
<!-- includo l'header -->
<?php
include ('header.php');
?>

<!-- includo il contentuto con i film-->
<?php
include ('content_movies.php');
?>

</body>
</html>

