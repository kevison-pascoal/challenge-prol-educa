const app = document.getElementById('app');
function toRegister() {
  app.innerHTML = `
    <h1 class="titleSection">Registration<h1>
    <form action="server.php" method="POST">
      <div class="containerInput">
        <input type="text" name="name" id="name" placeholder="full name"></input>
        <input type="tel" name="phone" id="tel" onkeyup="maskTel()" placeholder="telephone"></input>
        <input type="email" name="email" id="email" placeholder="email"></input>
        <input type="text" name="date" id="date" onfocus="(this.type='date')" placeholder="birth date"></input>
        <input type="text" name="mother" id="mother" placeholder="mother's name"></input>
        <input type="text" name="father" id="father" placeholder="father's name"></input>
        <input type="text" name="state" id="state" placeholder="state"></input>
        <input type="text" name="city" id="city" placeholder="city"></input>
      </div>
      <input type="submit" value="send"></input>
      <input type="button" id="back" onclick="backToIndex()" value="Back"></input>
    </form>
  `   
}
function backToIndex() {
  app.innerHTML = `
    <h1 class="titleSection">Challenge - Prol Educa</h1>
    <input type="button" id="list" class="btn btn-outline-primary" onclick="listData()" value="List"></input>
    <input type="button" id="register" class="btn btn-outline-primary" onclick="toRegister()" value="Register"></input>
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