<?php require_once('admin/scripts/config.php');
$ip = $_SERVER['REMOTE_ADDR'];

if(isset($_POST['submit'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	if($username !== "" && $password !== ""){
		$result = signin($username, $password, $ip);
		$message = $result;

	}else{
		$message = "please fill out the required fields.";

	}
}

 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/app.css">
<title>Welcome to your admin panel login</title>
</head>

<body>

	<?php if(!empty($message)){echo $message;} ?>

<div id="login">
	<form action="index.php" method="post">

		<label>Username</label>
		<input type="text" name ="username" size="40" value="" placeholder="Username">
		<br><br>
		<label>Password</label>
		<input type="password" name ="password" size="40" value="" placeholder="Password">
		<br>
		<input class="button" type="submit" name ="submit" value="Login">

	</form>

</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
</body>
</html>
