<?php

include_once("db.php");

$username = $_REQUEST["usernames"];
$password = $_REQUEST["password"];

$res=mysqli_query($conn,"SELECT username FROM userdata WHERE username = '$username' and password = '$password'");
$row = mysqli_num_rows($res);

if($row > 0){
  echo '<script>alert("Welcome")</script>';
  header("Refresh:0; url =../index.php");
}
else {
  echo '<script>alert("Username or password wrong!")</script>'
  . mysqli_error($conn);
  header("Refresh:0; url =../index.php");
}
mysqli_close($conn);

?>
