<?php
  include('./class/connect.php');
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $name = $firstName." ".$lastName;
  $telephone = $_POST['tel'];
  $date = $_POST['date'];
  $email = $_POST['email'];
  $mother = $_POST['mother'];
  $father = $_POST['father'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $id = rand(1000, 9999); 
  echo "
    $name<br>
    $telephone<br>
    $date<br>
    $email<br>
    $mother<br>
    $father<br>
    $state<br>
    $city<br>
  ";
  if($name == null or $email == null) {
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