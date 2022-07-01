<script>
  const app = document.getElementById('app');
  function toRegister() {
    app.innerHTML = `
      <h1 class="titleSection">Registration<h1>
      <form action="server.php" method="POST" id="form">
        <div class="containerInput" onmousemove="enable()">
          <div class="input-group">
            <input type="text" name="firstName" id="firstName" class="form-control" onblur="(this.placeholder='firstName')" onclick="(this.style='border: 1px solid #ced4da;')" placeholder="firstName">
            <input type="text" name="lastName" id="lastName" class="form-control" onblur="(this.placeholder='lastName')" onclick="(this.style='border: 1px solid #ced4da;')" placeholder="lastName">
          </div>
          <div class="input-group">
            <input type="tel" name="tel" id="tel" class="form-control" onblur="(this.placeholder='telephone')" onclick="(this.style='border: 1px solid #ced4da;')" style="" onkeydown="return maskTelephone(event)" placeholder="telephone">
            <input type="text" name="date" id="date" class="form-control" onblur="(this.placeholder='date')" onfocus="(this.type='date')" onclick="(this.style='border: 1px solid #ced4da;')" placeholder="birth date"></input> 
          </div>
            
          <div class="input-group">
            <input type="text" name="email" id="email" class="form-control" onblur="(this.placeholder='@exemple.com')" onclick="(this.style='border: 1px solid #ced4da;')" placeholder="@exemple.com">
          </div>

          <div class="input-group">
            <input type="text" name="mother" id="mother" class="form-control" onblur="(this.placeholder='mother name')" onclick="(this.style='border: 1px solid #ced4da;')" placeholder="mother's name">
            <input type="text" name="father" id="father" class="form-control" onblur="(this.placeholder='father name')" onclick="(this.style='border: 1px solid #ced4da;')" placeholder="father's name">
          </div>

          <div class="input-group">
            <select class="custom-select" name="state" id="inputGroupSelect02" onclick="(this.style='border: 1px solid #ced4da;')">
              <option selected>Choose your state...</option>
            </select>
            <input type="text" name="city" id="city" class="form-control" onblur="(this.placeholder='write your city')" onclick="(this.style='border: 1px solid #ced4da;')" placeholder="write your city" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="confirmRegister">
          <input type="submit" id="send" class="btn btn-outline-success btn-lg" onclick="checkData()" value="Send"></input>
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
  function maskTelephone(event) {
    let key = event.key;
    let telephone = event.target.value.replace(/\D+/g, "");
    if(/^[0-9]$/i.test(key)) {
      telephone = telephone + key;
      let size = telephone.length;
      if(size >= 12) {return false}
      if(size > 10) {
        telephone = telephone.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
      } else if(size > 5) {
        telephone = telephone.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
      } else if(size > 2) {
        telephone = telephone.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
      } else {
        telephone = telephone.replace(/^(\d*)/, "($1");
      }
      event.target.value = telephone;
      console.log(telephone);
    }
    if(!["Backspace", "Delete"].includes(key)) {
      return false;
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
            while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
              print_r($row->fullName);
              echo "
                <tr>
                  <td scope=".$count++.">".$row->id."</td>
                  <td>".$row->fullName."</td>
                  <td>".$row->telephone."</td>
                  <td>".$row->email."</td>
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