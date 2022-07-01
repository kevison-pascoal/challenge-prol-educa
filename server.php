<?php
  include('./class/connect.php');

  $name = $_POST['firstName']." ".$_POST['lastName'];
  $telephone = $_POST['tel'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $mother_name = $_POST['mother'];
  $father_name = $_POST['father'];
  $state = $_POST['state'];
  $city = $_POST['city'];

  if(empty($name) || empty($telephone) || empty($email) || empty($date) || empty($state)) {
    header('location: index.php');  
    exit;
  } else {
    $sql = "INSERT INTO $table(name, telephone, email, birth_date, mother_name, father_name, state, city) VALUES(:name, :telephone, :email, :date, :mother_name, :father_name, :state, :city)";
    $stmt = $orm->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':mother_name', $mother_name);
    $stmt->bindParam(':father_name', $father_name);
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