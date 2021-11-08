<?php
  include_once("db.php");

  $username = $_REQUEST["usernamesRegister"];
  $password = $_REQUEST["psw"];
  $country = $_REQUEST["countr"];
  $email = $_REQUEST["mail"];


  $res = mysqli_query($conn,"SELECT username FROM userdata WHERE username = '$username'");
  $row = mysqli_num_rows($res);
  if($row > 0){
      echo '<script>alert("Username is taken!")</script>';
      header("Refresh:0; url =../index.php");
  }
  else {
    $sql = "INSERT INTO userdata VALUES('','$username', '$password', '$country', '$email')";
    if( mysqli_query($conn,$sql)){
      echo '<script>alert("Inserted Succesfully")</script>';
      header("Refresh:0; url =../index.php");
    }
    else {
      echo '<script>alert("Insertion failed")</script>'
      . mysqli_error($conn);
      header("Refresh:0; url =../index.php");
    }
    mysqli_close($conn);
  }


?>
