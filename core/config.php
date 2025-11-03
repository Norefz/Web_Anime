<?php  
$servername = "";
$username = "";
$password = "";
$database= "";
$connect = mysqli_connect($servername,$username,$password,$database);
if ($connect) {
  echo("database cant connect ".mysqli_connect());
}
else{
  echo("database connected successfuly");
}



?>
