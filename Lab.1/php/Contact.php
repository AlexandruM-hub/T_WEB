<?php
  $email = $_REQUEST["mailMail"];
  $message = $_REQUEST["mailText"];
if(empty($email) || empty($message) ){
  echo '<script>alert("Completati campurile!")</script>';
  header("Refresh:0; url =../index.php");
}else{
  echo '<script>alert("Mesajul a fost trimis!")</script>';
  header("Refresh:0; url =../index.php");
}
?>
