<?php
  include('./class/connect.php');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $id = rand(1000, 9999);
  if($name == null or $email == null or $password == null) {
    header('location: index.php');  
    die("<br>Error! Fill in all fields");
  } 
  mysqli_query($orm, "INSERT INTO register VALUES ('$id', '$name', '$email', '$password')") or die("<br>Acess Denied.");
  while($row = mysqli_fetch_object($consult)) {
    if($row -> name == null or $row -> email == null or $row -> password == null) {
      mysqli_query($orm, "DELETE FROM register WHERE id=$row->id");
    }
  }
  mysqli_close($orm);
  header('location: index.php');
?>