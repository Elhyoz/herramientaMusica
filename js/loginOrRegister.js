
var user, email, pass, numBoleta, apPaterno, apMaterno, repeatPwd, arrayForm, url, usrLevel;

var data;


$("#targetSignUp").submit(function(event) {
  event.preventDefault();

  var formData = new FormData($("#targetSignUp")[0]);
  var url = "http://localhost/dashboard/herramientaMusica/API/usuarios.php";

  fetch(url + "?op=verificar", {
    method: 'POST',
    body: formData,
  })
  .then(response => console.log(response.json()));

});


$("#targetRegister").submit(function(event){
  event.preventDefault();
  var formData = new FormData($("#targetRegister")[0]);
  var url = "http://localhost/dashboard/herramientaMusica/API/usuarios.php";

  pass = $("#pass").val();
  repeatPwd = $("#repeatPwd").val();


  if(pass != repeatPwd){
    alert("Las contraseñas no coinciden. Vuelve a intentarlo");
  }

  fetch(url + "?op=insertar", {
    method: 'POST',
    body: formData,

  })
  .then(response => console.log(response.json()));
/*  .catch(error => console.error('Error:', error))
  .then(response => console.log(response));*/

});
