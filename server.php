<?php
  include('./class/connect.php');
  $name = $_POST['name'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $mother = $_POST['mother'];
  $father = $_POST['father'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $id = rand(1000, 9999);
  if($name == null or $email == null or $password == null) {
    header('location: index.php');  
    die("<br>Error! Fill in all fields");
  } 
  mysqli_query($orm, "INSERT INTO register VALUES ('$id', '$name', '$telephone', '$email', '$date', '$mother', '$father', '$state', '$city')") or die("<br>Acess Denied.");
  while($row = mysqli_fetch_object($consult)) {
    if($row -> name == null or $row -> email == null or $row -> password == null) {
      mysqli_query($orm, "DELETE FROM register WHERE id=$row->id");
    }
  }
  mysqli_close($orm);
  header('location: index.php');
?>