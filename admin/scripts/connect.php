<?php   //This script will connect us yo our database
$user = "root";
$pass = "";
// $pass = "root";
$url = "localhost";
$db = "db_moviecms";

//ticket to access our db
  // $link = mysqli_connect($url, $user, $pass, $db);//windows
  $link = mysqli_connect($url, $user, $pass, $db);

  //Check our connection if it fails
  if(mysqli_connect_error()){
      printf("Connect Failed: %s\n", mysqli_connect_error());
      exit();

  }

 ?>
