<?php   
//to display_error
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include '../core/connect.php';
$sql = "SELECT * FROM anime";
$result = mysqli_query($conn, $sql);
$data=[];
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)){
    $data[]=$row;
  }
}
mysqli_close($conn);
return $data;

?>


