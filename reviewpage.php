<?php

	require_once('admin/scripts/config.php');
	if(isset($_GET['id'])) {
		$tbl = "tbl_movies";
		$col = "movies_id";
		$id = $_GET['id'];
		$getMovie = singleGen($tbl, $col, $id);
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Movies></title>
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/app.css">
</head>
<body>

	<?php
		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
			echo "<div class=\"videos movie-inline small-12 medium-6 large-3 columns\">
			<video  class=\"videos\" controls src=\"videos/{$row['movies_trailer']}\" ></video>
			<img class=\"img\" src=\"images/{$row['movies_poster']}\" alt=\"{$row['movies_title']}\">
			<h2 class=\"title\">{$row['movies_title']}</h2>
			<h3 class=\"year\">{$row['movies_year']}</h3>
			<p class=\"desc\">{$row['movies_desc']}</p>
			<a id=\"goBack\" href=\"admin/movies.php\">Go Back</a>
			</div>";

		}else{
			echo "<p>{$getMovie}</p>";
		}

	?>

</body>
</html>
