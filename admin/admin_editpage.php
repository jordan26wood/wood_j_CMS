<?php
	require_once('scripts/config.php');
	$tbl = 'tbl_movies';
	$col = 'movies_title';
	$movies = getAll($tbl, $col);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Panel - Edit</title>
<link rel="stylesheet" href="../css/foundation.css">
<link rel="stylesheet" href="../css/app.css">

</head>
<body>
	<a id="goBack" href="admin_panel">Go Back</a>
	<div id="delete">
	<h2>Delete a Movie</h2>


<?php
  while($row = mysqli_fetch_array($movies))
			echo "<div class=\"movie-inline small-12 medium-6 large-3 columns\">
		<img src=\"../images/{$row['movies_poster']}\" alt=\"{$row['movies_title']}\"><a class=\"delButton\" href=\"admin_editmovies.php?id={$row['movies_id']}\">Edit</a>
			</div>";
	?>
	
</div>
</body>
</html>
