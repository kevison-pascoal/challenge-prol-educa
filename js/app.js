const app = document.getElementById('app');
function toRegister() {
  app.innerHTML = `
    <h1 class="titleSection">Registration<h1>
    <form action="server.php" method="POST">
      <input type="text" name="name" placeholder="name"></input>
      <input type="email" name="email" placeholder="email"></input>
      <input type="password" name="password" placeholder="password"></input>
      <input type="submit" value="send"></input>
      <input type="button" id="back" onclick="backToIndex()" value="Back"></input>
    </form>
  `   
}
function backToIndex() {
  app.innerHTML = `
    <h1 class="titleSection">Challenge - Prol Educa</h1>
    <input type="button" id="list" onclick="listData()" value="List">
    <input type="button" id="register" onclick="toRegister()" value="Register">
    `
}