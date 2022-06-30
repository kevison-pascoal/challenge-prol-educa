<?php
  include('./class/connect.php');
  $name = $_POST['firstName']." ".$_POST['lastName'];
  $telephone = $_POST['tel'];
  $date = $_POST['date'];
  $email = $_POST['email'];
  $mother = $_POST['mother'];
  $father = $_POST['father'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $id = rand(1, 99999); 
  if(empty($name) || empty($email)) {
    header('location: index.php');  
    die("<br>Error! Fill in all fields");
  }
  mysqli_query($orm, "INSERT INTO register VALUES ('$id', '$name', '$telephone', '$email', '$date', '$mother', '$father', '$state', '$city')") or die("<br>Acess Denied.");
  mysqli_close($orm);
  header('location: index.php');
?>