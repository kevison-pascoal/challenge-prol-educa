<?php
  include('./class/connect.php');
  $name = $_POST['firstName']." ".$_POST['lastName'];
  $telephone = $_POST['tel'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $mother = $_POST['mother'];
  $father = $_POST['father'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $id = rand(10000, 99999); 
  if(empty($name)) {
    header('location: index.php');  
    die("<br>Error! Fill in all fields");
  } else {
    $sql = "INSERT INTO register(id, fullName, telephone, email, birthDate, mother, father, state, city) VALUES(:id, :name, :telephone, :email, :date, :mother, :father, :state, :city)";
    $stmt = $orm->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':mother', $mother);
    $stmt->bindParam(':father', $father);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':city', $city);
    $result = $stmt->execute();
    if(!$result) {
      var_dump($stmt->errorInfo());
      exit;
    }
    header('location: index.php');
  }
?>