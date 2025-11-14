<?php  
include'../../core/connect.php';
if (isset($_POST['submit'])) {
  $title= $_POST['title'];
  $image = $_POST['image'];
  $synopsis = $_POST['synopsis'];
  $genre = $_POST['genre'];
  $date = $_POST['date'];
  $rating = $_POST['rating'];
    
  $result ="INSERT INTO anime(title,image,synopsis,genre,date,rating)
    VALUES('$title','$image','$synopsis','$genre','$date','$rating')";
  mysqli_query($conn,$result);
  echo"<h1>Anime Added!</h1>";

}

?>
