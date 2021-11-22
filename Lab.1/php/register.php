<?php
  include_once("db.php");

  $username = $_POST["usernamesRegister"];
  $password = $_POST["passwordRegister"];
  $country = $_POST["country"];
  $email = $_POST["email"];

  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $country = mysqli_real_escape_string($conn, $country);
  $email = mysqli_real_escape_string($conn, $email);

  function validationFunction($toCheck){
    if($toCheck == ""){
      return false;
    }else if (strlen($toCheck) < 4 || strlen($toCheck) > 10){
      return false;
    }
    return true;
  }

  function emailValidation($mail){
    if($mail == ""){
      return false;
    } else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $mail)){
      return false;
    }
    return true;
  }

  if(validationFunction($username) && validationFunction($password) && validationFunction($country) && emailValidation($email)){
    $res = mysqli_query($conn,"SELECT username FROM userdata WHERE username = '$username'");
    $row = mysqli_num_rows($res);
    if($row > 0){
        echo json_encode(array("statusCode" => 201));
    }
    else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO userdata VALUES('','$username', '$hash', '$country', '$email')";
      if( mysqli_query($conn,$sql)){
        echo json_encode(array("statusCode" => 200));
      }
      else {
        echo json_encode(array("statusCode" => 201));
      }
      mysqli_close($conn);
    }
  }else {
    echo json_encode(array("statusCode" => 201));
  }



?>
