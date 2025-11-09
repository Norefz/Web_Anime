<?php 
include'../core/error.php';
include'../core/connect.php';
$sql = "SELECT * FROM episode";
$result= mysqli_query($conn, $sql);
$data=[];
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
    $data[]= $row;
  }
}
mysqli_close($conn);
return $data;
?>
