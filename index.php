<!--
<?php 
  include('./class/connect.php');
?>
-->
<!DOCTYPE html>
<html lang="en">
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
  <script src="./js/app.js"></script>
  <script type="text/javascript">
    function listData() {
      app.innerHTML = `
        <h1 class="titleSection">List Users</h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $count = 0;
              while($row = mysqli_fetch_object($consult)) { 
                echo "
                  <tr>
                    <td scope=".$count++.">".$row -> id."</td>
                    <td>".$row -> name."</td>
                    <td>".$row -> email."</td>
                    <td>".$row -> password."</td>
                  </tr>
                ";
              }   
            ?>
          </tbody>  
        </table>
        <input type="button" id="back" class="btn btn-outline-secondary btn-lg" onclick="backToIndex()" value="Back" style="margin: 2rem; color: #FAFAFA"></input>
      `
    }
  </script>
</body>
</html>