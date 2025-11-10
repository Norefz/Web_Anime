<?php  
include'../../core/error.php';
include'../../core/connect.php';
if (isset($_GET['id_anime'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM anime WHERE id_anime=$id";
  if (mysqli_query($conn,$sql)) {
    echo"data $id has  been succesfully deleted";
    //header('location:../../view/index.php');
  }
  else {
    echo"data failed to delete!";

  }
}



?>
