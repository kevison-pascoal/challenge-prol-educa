<script>
  function checkData() {
    const button = document.getElementById('send');
    let valid = 0;
    const firstName = document.getElementById('firstName');
    const lastName = document.getElementById('lastName');
    const email = document.getElementById('email');
    const tel = document.getElementById('tel');
    const date = document.getElementById('date');
    const mother = document.getElementById('mother');
    const father = document.getElementById('father');
    const state = document.getElementById('inputGroupSelect02');
    const city = document.getElementById('city');
    if(firstName.value == '') {
      firstName.setAttribute('style', 'border: 1px solid red;');
      firstName.setAttribute('placeholder', 'required name field');
      valid++;
    }
    if(lastName.value == '') {
      lastName.setAttribute('style', 'border: 1px solid red;');
      lastName.setAttribute('placeholder', 'required lastName field');
      valid++;
    }
    if(email.value == '') {
      email.setAttribute('style', 'border: 1px solid red;');
      email.setAttribute('placeholder', 'required e-mail field');
      valid++;
    }
    if(tel.value == '') {
      tel.setAttribute('style', 'border: 1px solid red;');
      tel.setAttribute('placeholder', 'required telephone field');
      valid++;
    }
    if(date.value == '') {
      date.setAttribute('style', 'border: 1px solid red;');
      date.setAttribute('placeholder', 'required date field');
      valid++;
    }
    if(mother.value == '') {
      mother.setAttribute('style', 'border: 1px solid red;');
      mother.setAttribute('placeholder', 'required mother field');
      valid++;
    }
    if(father.value == '') {
      father.setAttribute('style', 'border: 1px solid red;');
      father.setAttribute('placeholder', 'required father field');
      valid++;
    }
    if(state.value == 'Choose your state...') {
      state.setAttribute('style', 'border: 1px solid red;');
      valid++;
    }
    if(city.value == '') {
      city.setAttribute('style', 'border: 1px solid red;');
      city.setAttribute('placeholder', 'required city field');
      valid++;
    }
    if(valid > 0) {
      button.setAttribute('disabled', 'on');
    }
  }
  function enable() {
    document.getElementById('send').removeAttribute('disabled');
  }
</script>