<?php  
<?php  
include'../../core/connect.php';
if (isset($_POST['update'])) {
  $id=$_GET['id_anime'];
  $title= $_POST['title'];
  $image = $_POST['image'];
  $synopsis = $_POST['synopsis'];
  $genre = $_POST['genre'];
  $date = $_POST['date'];
  $rating = $_POST['rating'];
    
  $sql ="UPDATE  anime SET title=$title,image=$image,synopsis=$synopsis,genre=$genre,date=$date,rating=$rating WHERE id_anime = $id";
  if (mysqli_query($conn,$sql)) {
    echo"UPDATE Succesfully";
  }
  else {
    echo"Failed TO UPDATE".mysqli_error($conn);
  }
  mysqli_query($conn,$result);
  echo"<h1>Anime Added!</h1>";

}






?>
