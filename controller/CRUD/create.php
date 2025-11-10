<?php  
include'../../core/connect.php';
include'../../core/error.php';
if (isset($_POST['submit'])) {
  $title= $_POST['title'];
  $image = $_POST['image'];
  $synopsis = $_POST['synopsis'];
  $genre = $_POST['genre'];
  $date = $_POST['date'];
  $rating = $_POST['rating'];
  $result = mysql_query($conn,"INSERT INTO anime(image,title,synopsis,genre,date,rating)
    VALUES('$title','$synopsis','$genre','$date','$rating')";
  mysql_query($conn,$result);
  echo"<h1>Anime Added!</h1>";
}


?>
