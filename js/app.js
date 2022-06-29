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
            <option value="Acre - (AC)">Acre - (AC)</option>
            <option value="Alagoas - (AL)">Alagoas - (AL)</option>
            <option value="Amapá - (AP)">Amapá - (AP)</option>
            <option value="Bahia - (BA)">Bahia - (BA)</option>
            <option value="Ceará - (CE)">Ceará - (CE)</option>
            <option value="Distrito Federal - (DF)">Distrito Federal - (DF)</option>
            <option value="Espírito Santo - (ES)">Espírito Santo - (ES)</option>
            <option value="Goiás - (GO)">Goiás - (GO)</option>
            <option value="Maranhão - (MA)">Maranhão - (MA)</option>
            <option value="Mato Grosso - (MT)">Mato Grosso - (MT)</option>
            <option value="Mato Grosso do Sul - (MS)">Mato Grosso do Sul - (MS)</option>
            <option value="Minas Gerais (MG)">Minas Gerais (MG)</option>
            <option value="Pará - (PA)">Pará - (PA)</option>
            <option value="Paraíba - (PB)">Paraíba - (PB)</option>
            <option value="Paraná - (PR)">Paraná - (PR)</option>
            <option value="Pernambuco - (PE)">Pernambuco - (PE)</option>
            <option value="Piauí - (PI)">Piauí - (PI)</option>
            <option value="Rio de Janeiro - (RJ)">Rio de Janeiro - (RJ)</option>
            <option value="Rio Grande do Norte - (RN)">Rio Grande do Norte - (RN)</option>
            <option value="Rio Grande do Sul - (RS)">Rio Grande do Sul - (RS)</option>
            <option value="Rondônia - (RO)">Rondônia - (RO)</option>
            <option value="Roraima - (RR)">Roraima - (RR)</option>
            <option value="Santa Catarina - (SC)">Santa Catarina - (SC)</option>
            <option value="São Paulo - (SP)">São Paulo - (SP)</option>
            <option value="Sergipe - (SE)">Sergipe - (SE)</option>
            <option value="Tocantins - (TO)">Tocantins - (TO)</option>
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