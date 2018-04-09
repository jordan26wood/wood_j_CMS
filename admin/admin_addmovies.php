<?php

	require_once('scripts/config.php');

	$tbl = "tbl_genre";
	$genQuery = getAll($tbl);
	if(isset($_POST['submit'])){
			$poster = $_FILES["poster"];
			$title = $_POST["title"];
			$trailer = $_POST["trailer"];
			$desc = $_POST["desc"];
			$rating = $_POST["rating"];
			$runtime = $_POST["runtime"];
			$release = $_POST["release"];
			$genre = $_POST['genList'];
			$result = addMovie($poster, $title, $trailer, $desc, $rating, $runtime, $release, $genre);
			$message = $result;
		}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/app.css">
<title>CMS Movie Add</title>
</head>
<body>
		<a id="goBack" href="admin_panel">Go Back</a>
<div class="addMovie">
	<form action="admin_addmovies.php" method="post" enctype="multipart/form-data">
		<label>Poster Image:</label>
		<input type="file" name="poster" value="">

		<br>

		<label>Movie Trailer:</label>
		<input type="file" name="trailer" value="">

		<br>

		<label>Movie Title:</label>
		<input type="text" name="title" value="">

		<br>

		<label>Movie Description:</label>
		<input type="text" name="desc" value="">

		<br>


		<label>Movie Rating (1 to 10):</label>
	  <input type="text" name="rating" value="">

		<br>

		<label>Movie Runtime:</label>
		<input type="text" name="runtime" value="">

		<br>

		<label>Movie Release:</label>
		<input type="text" name="release" value="">

		<br>

		<div class="center">
		<select name="genList">
			<option>What Genre is This Movie?</option>
		</div>

		<?php
				while($row = mysqli_fetch_array($genQuery)){
					echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
				}

		?>

	</select>

		<input type="submit" name ="submit" value="add movie">

	</form>
</div>
</body>
</html>
