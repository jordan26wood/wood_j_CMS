<?php
  function addMovie($poster, $title, $trailer, $desc, $rating, $runtime, $release, $genre){
include('connect.php');


// CAN'T GET MOVIE TRAILER TO ADD//
 // || $trailer['type'] == "video/mp4")
  if($poster['type'] == "image/jpg" || $poster['type'] == "image/jpeg"  {

$posterAdd = "../images/{$poster['name']}";

if(move_uploaded_file($poster['tmp_name'], $posterAdd)){

  $copy = "../images/TH_{$poster['name']}";

  if(!copy($posterAdd, $copy)){
    $message = "Whooops, that didn't work.";
    return $message;
}

  $qstring = "INSERT INTO tbl_movies VALUES(NULL, '{$title}', '{$poster['name']}',  '{$desc}', '{$rating}', '{$runtime}', '{$release}', '{$trailer['name']}')";
  $result = mysqli_query($link, $qstring);

    if($result){
        $qstring2 = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1";
        $result2 = mysqli_query($link, $qstring2);
        $row = mysqli_fetch_array($result2);
        $lastID = $row['movies_id'];

        $qstring3 = "INSERT INTO tbl_mov_genre VALUES(NULL, {$lastID}, {$genre})";
        $result3 = mysqli_query($link, $qstring3);
    }
}

}else{
  echo "Sorry try Again With a Different Photo Type";
}

mysqli_close($link);
}

function delete($id){
   include('connect.php');
   $delS = "DELETE FROM tbl_movies WHERE movies_id = {$id}";
   $delQ =  mysqli_query($link, $delS);
   if($delQ){
     redirect_to("../admin_panel.php");
   }else{
     $message = "Sorry try Again";
     return $message;
   }
   mysqli_close($link);
 }
 ?>
