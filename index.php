<?php include('./class/connect.php');?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/appBootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Challenge</title>
</head>
<body>
  <section id="app">
    <h1 class="titleSection">Challenge - Prol Educa</h1>
    <input type="button" id="list" class="btn btn-outline-info btn-lg" onclick="listData()" value="List"></input>
    <input type="button" id="register" class="btn btn-outline-info btn-lg" onclick="toRegister()" value="Register"></input>
  </section>
  <?php include('./js/scripts.php');?>
</body>
</html>