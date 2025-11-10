<?php  
include'../../core/connect.php';
include'../../core/error.php';
if (isset($_POST['submit'])) {
  $image = $_POST['image'];
  $title= $_POST['title'];
  $synopsis = $_POST['synopsis'];
  $genre = $_POST['genre'];
  $date = $_POST['date'];
  $rating = $_POST['rating'];
  $result = mysql_query($conn,"INSERT INTO anime(image,title,synopsis,genre,date,rating)");
  # code...
}


?>
