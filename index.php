<?php 
  include('./class/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/app.css">
  <title>Challenge</title>
</head>
<body>
  <section id="app">
    <h1 class="titleSection">Challenge - Prol Educa</h1>
    <input type="button" id="list" onclick="listData()" value="List">
    <input type="button" id="register" onclick="toRegister()" value="Register">
  </section>
  <script src="./js/app.js"></script>
  <script type="text/javascript">
    function listData() {
      app.innerHTML = `
        <h1 class="titleSection">List Users</h1>
        <table>
          <tr>
            <th>&nbsp; id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
          </tr>
          <?php 
            while($row = mysqli_fetch_object($consult)) {
              echo "
                <tr>
                  <td>".$row -> id."</td>
                  <td>".$row -> name."</td>
                  <td>".$row -> email."</td>
                  <td>".$row -> password."</td>
                </tr>
              ";
            }   
          ?>
        </table>
        <input type="button" id="back" onclick="backToIndex()" value="Back" style="margin: 2rem; color: #FAFAFA"></input>
      `
    }
  </script>
</body>
</html>