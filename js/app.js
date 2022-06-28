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
          <select class="custom-select" id="inputGroupSelect02">
            <option selected>Choose your state...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <input type="text" name="city" id="city" class="form-control" placeholder="write your city" aria-describedby="basic-addon1">
        </div>
        
        

        <!-- 
        <input type="text" name="name" id="name" placeholder="full name"></input>
        <input type="tel" name="phone" id="tel" onkeyup="maskTel()" placeholder="telephone"></input>
        <input type="email" name="email" id="email" placeholder="email"></input>

        <input type="text" name="date" id="date" onfocus="(this.type='date')" placeholder="birth date"></input>

        <input type="text" name="state" id="state" placeholder="state"></input>
        <input type="text" name="city" id="city" placeholder="city"></input>
        -->
      </div>
      <div class="confirmRegister">
        <input type="submit" class="btn btn-outline-success btn-lg" value="Send"></input>
        <input type="button" id="back" class="btn btn-outline-secondary btn-lg" onclick="backToIndex()" value="Back"></input>
      </div>
    </form>
  `   
}
function backToIndex() {
  app.innerHTML = `
    <h1 class="titleSection">Challenge - Prol Educa</h1>
    <input type="button" id="list" class="btn btn-outline-info btn-lg" onclick="listData()" value="List"></input>
    <input type="button" id="register" class="btn btn-outline-info btn-lg" onclick="toRegister()" value="Register"></input>
    `
}
function maskTel() {
  const tel = document.getElementById('tel');
  const element = tel.value.length;
  if(element == 0) {
    tel.value += "(";
  } else if(element == 3) {
    tel.value += ") ";
  } else if(element == 9) {
    tel.value += "-";
  } else if (element == 7) {
    tel.value;
  }
  console.log(tel.value.lengt);
}