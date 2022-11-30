<?php
  $name = $_POST['name'];
  $password = $_POST['password'];


  //database
  $conn = new mysqli('localhost', 'root', '', 'sample');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else {
    $stmt = $conn->prepare("insert into user(name, password)
      values(?,?)");
      $stmt->bind_param("ss",$name, $password);
      $stmt->execute();
      echo "registration complete..";
      $stmt->close();
      $conn->close();
  }
?>