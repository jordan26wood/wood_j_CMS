<?php

	require_once('scripts/config.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
<link rel="stylesheet" href="../css/app.css">
</head>
<body>
	<a id="signOut" href="scripts/caller.php?caller_id=logout">Sign Out</a>
	<div class="box">
	<div id="panel">
		<ul>
		  <li><a href="admin_addmovies">Add Movie</a></li>
		  <li><a href="admin_deletemovies">Delete Movie</a></li>
		  <li><a href="admin_editpage">Edit Movie</a></li>
		</ul>

	</div>
</div>
</body>
</html>
