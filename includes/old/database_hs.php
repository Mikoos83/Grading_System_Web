<?php
$db_host = "localhost";
$db_name = "grade";
$db_user = "SOEN287";
$db_pass = "EiukHrG!/*nN7*1A";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
  echo mysqli_connect_error();
  exit;
}
?>
