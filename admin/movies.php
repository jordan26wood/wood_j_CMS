<?php

	require_once('scripts/config.php');
	confirm_logged_in();

  if(isset($_GET['filter'])){
  		$tbl = "tbl_movies";
  		$tbl2 = "tbl_genre";
  		$tbl3 = "tbl_movies_gen";
  		$col = "movies_id";
  		$col2 = "genre_id";
  		$col3 = "genre_name";
  		$filter = $_GET['filter'];
  		$getMovies = filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
  	}else{
		$tbl = "tbl_movies";
    $col = "movies_rating";
		$getMovies = allGen($tbl, $col);
}
?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotten Potatoes</title>

    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="background">
	<div class="admin">
		<a href="admin_panel">Admin Panel</a>
	</div>

  <div class="topbar">
  <div class="filterNav">
      <ul class="filter">
        <div class="small-12 medium-12 medium-centered columns">
        <li><a href="movies.php">Most Popular</a></li>
        <li><a href="movies.php?filter=action">Action</a></li>
        <li><a href="movies.php?filter=comedy">Comedy</a></li>
        <li><a href="movies.php?filter=family">Family</a></li>
        <li><a href="movies.php?filter=drama">Drama</a></li>
        <li><a href="movies.php?filter=thriller">Thriller</a></li>
        <li><a href="movies.php?filter=animation">Animation</a></li>
        <li><a href="movies.php?filter=romance">Romance</a></li>
        </div>
      </ul>
  </div>
</div>

    <?php
    if(!is_string($getMovies)){
      while($row = mysqli_fetch_array($getMovies)){
        echo "<div class=\"movie-inline small-12 medium-6 large-3 columns\">
      <a href=\"../reviewpage.php?id={$row['movies_id']}\"><img src=\"../images/{$row['movies_poster']}\" alt=\"{$row['movies_title']}\"></a>
				</div>";
      }
    }else {
      echo "<p class=\"error\">{$getMovies}</p>";
    }

    ?>


<script src="../js/vendor/jquery.js"></script>
<script src="../js/vendor/what-input.js"></script>
<script src="../js/vendor/foundation.js"></script>
</body>
</html>
