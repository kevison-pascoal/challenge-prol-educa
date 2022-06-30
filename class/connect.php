<?php 
  $hostname = '127.0.0.1';
  $username = 'root';
  $passwordName = '';
  $dataBase = 'challenge';
  $orm = new PDO("mysql:host=$hostname;dbname=$dataBase", $username, $passwordName);
  try {
    $orm->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $orm->prepare("SELECT * FROM register");
    $stmt->execute(array());
  } catch (PDOException $e) {
    echo 'ERROR: '.$e->getMessage();
  }
?>