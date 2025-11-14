<?php  
include'../../core/connect.php';
if (isset($_POST['submit'])) {
  $episode_number= $_POST['episode_number'];
  $title = $_POST['title'];
  $video_url = $_POST['video_url'];
  $thumbnail_url = $_POST['thumbnail_url'];
    
  $result ="INSERT INTO episode(episode_number,title,video_url,thumbnail_url,date)
    VALUES('$episode_number','$title','$video_url','$thumbnail_url')";
  mysqli_query($conn,$result);
  echo"<h1>Episode Added!</h1>";

}

?>
