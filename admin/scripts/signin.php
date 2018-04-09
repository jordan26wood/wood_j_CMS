<?php
function signin($username, $password, $ip) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM tbl_login WHERE login_user='{$username}' AND login_pass='{$password}'";
		$user_set = mysqli_query($link, $loginstring);
		if(mysqli_num_rows($user_set)){ // username/password found in db
			$founduser = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $founduser['login_id'];
			$_SESSION['login_id'] = $id;
			$_SESSION['login_user'] = $founduser['login_name'];
				if(mysqli_query($link, $loginstring)){
					$update = "UPDATE tbl_login SET login_ip = '{$ip}' WHERE login_id={$id}";
					$updatequery = mysqli_query($link, $update);
				}

				redirect_to("admin/movies.php");
		}else{
			$incorrect = "The Username or Password is incorrect";
			return $incorrect;
		}
		mysqli_close($link);
	}

 ?>
