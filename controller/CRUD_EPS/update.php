<?php  
include'../../core/connect.php';
include'../../core/error.php';
if (isset($_POST['update'])) {
  $id= $_POST['id_anime'] ?? null;
  $episode_number= $_POST['episode_number'];
  $title = $_POST['title'];
  $video_url = $_POST['video_url'];
  $thumbnail_url = $_POST['thumbnail_url'];
  if (!$id) {
    echo"missing index!";
    }
    
   $sql ="UPDATE  episode SET episode_number='$episode_number',title='$title',video_url='$video_url',thumbnail_url='$thumbnail_url' WHERE id_anime = $id";

    

  if (mysqli_query($conn,$sql)) {
    echo"UPDATE Succesfully";
  }
  else {
    echo"Failed TO UPDATE".mysqli_error($conn);
  }

}






?>
