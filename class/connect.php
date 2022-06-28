<?php 
  $hostname = '127.0.0.1';
  $username = 'root';
  $passwordName = '';
  $dataBase = 'challenge'; 
  $orm = mysqli_connect($hostname, $username, $passwordName, $dataBase) or die("Don't make possible efection the connect server");
  $consult = mysqli_query($orm, "SELECT * FROM register");
?>