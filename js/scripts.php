<script>
  const app = document.getElementById('app');
  function toRegister() {
    app.innerHTML = `
      <h1 class="titleSection">Registration<h1>
      <form action="server.php" method="POST">
        <div class="containerInput">
          <div class="input-group">
            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="firstName">
            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="lastName">
          </div>
          <div class="input-group">
            <input type="tel" name="tel" id="tel" class="form-control" placeholder="telephone">
            <input type="text" name="date" id="date" class="form-control" onfocus="(this.type='date')" placeholder="birth date"></input> 
          </div>
            
          <div class="input-group">
            <input type="text" name="email" id="email" class="form-control" placeholder="@exemple.com">
          </div>

          <div class="input-group">
            <input type="text" name="mother" id="mother" class="form-control" placeholder="mother's name">
            <input type="text" name="father" id="father" class="form-control" placeholder="father's name">
          </div>

          <div class="input-group">
            <select class="custom-select" name="state" id="inputGroupSelect02">
              <option selected>Choose your state...</option>
            </select>
            <input type="text" name="city" id="city" class="form-control" placeholder="write your city" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="confirmRegister">
          <input type="submit" class="btn btn-outline-success btn-lg" value="Send"></input>
          <input type="button" id="back" class="btn btn-outline-secondary btn-lg" onclick="backToIndex()" value="Back"></input>
        </div>
      </form>
    `   
    genereteStates();
  }
  function genereteStates() {
    const element = document.getElementById('inputGroupSelect02');
    for(let index = 0; index < states.length; index++) { 
      element.innerHTML += `<option value="${states[index]}">${states[index]}</option>`;
    }
  }
  function listData() {
    app.innerHTML = `
      <h1 class="titleSection">List Users</h1>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Telephone</th>
            <th scope="col">E-mail</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $count = 0;
            while($row = mysqli_fetch_object($consult)) { 
              echo "
                <tr>
                  <td scope=".$count++.">".$row -> id."</td>
                  <td>".$row -> fullName."</td>
                  <td>".$row -> telephone."</td>
                  <td>".$row -> email."</td>
                </tr>
              ";
            }   
          ?>
        </tbody>
      </table>
      <input type="button" id="back" class="btn btn-outline-secondary btn-lg" onclick="backToIndex()" value="Back" style="margin: 2rem; color: #FAFAFA"></input>
    `
  }
  function backToIndex() {
    app.innerHTML = `
      <h1 class="titleSection">Challenge - Prol Educa</h1>
      <input type="button" id="list" class="btn btn-outline-info btn-lg" onclick="listData()" value="List"></input>
      <input type="button" id="register" class="btn btn-outline-info btn-lg" onclick="toRegister()" value="Register"></input>
      `
  }
</script>