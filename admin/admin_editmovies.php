<?php
	require_once('scripts/config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Panel - Edit</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<a id="goBack" href="admin_panel">Go Back</a>
<div class="edit">
	<h2>Edit a Movie</h2>
	<?php
		$tbl = "tbl_movies";
		$col = "movies_id";
		$id = $_GET['id'];
		echo single_edit($tbl, $col, $id);
	?>
</div>

</body>
</html>
