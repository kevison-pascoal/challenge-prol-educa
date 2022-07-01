<?php  
  try {
    $hostname = '127.0.0.1';
    $username = 'root';
    $passwordName = '';
    $dataBase = 'challenge';
    $table = 'register';
    $orm = new PDO("mysql:host=$hostname", $username, $passwordName);
    $sql= "CREATE DATABASE IF NOT EXISTS $dataBase;
    GRANT ALL ON $dataBase TO $username@$hostname;
    FLUSH PRIVILEGES;";
    $orm->prepare($sql)->execute();
    $orm = new PDO("mysql:host=$hostname;dbname=$dataBase", $username, $passwordName);
    $sql = "CREATE TABLE IF NOT EXISTS $table (
      user_id INT (11) NOT NULL AUTO_INCREMENT,
      name VARCHAR (40) NOT NULL,
      telephone VARCHAR (15),
      email VARCHAR (40),
      birth_date VARCHAR (10),
      mother_name VARCHAR (40),
      father_name VARCHAR (40),
      state VARCHAR (30),
      city VARCHAR (20),
      PRIMARY KEY (user_id)
    )";
    $orm->prepare($sql)->execute();
    $stmt = $orm->prepare("SELECT * FROM $table");
    $stmt->execute(array());
  } catch (PDOException $e) {
    echo 'ERROR: '.$e->getMessage();
  }
?>