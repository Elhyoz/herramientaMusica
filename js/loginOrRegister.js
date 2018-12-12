
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
  .then(response => console.log(response.json()))
  .catch(error => console.error('Error:', error));

});


$("#targetRegister").submit(function(event){
  event.preventDefault();
  var formData = new FormData($("#targetRegister")[0]);
  
  var url = "http://localhost/dashboard/herramientaMusica/API/usuarios.php";

  usrLevel = $("#usrLevel").val();
  pass = $("#pass").val();
  repeatPwd = $("#repeatPwd").val();


  if(pass != repeatPwd){
    alert("Las contraseñas no coinciden. Vuelve a intentarlo");
    event.preventDefault();
  }

  $.ajax({
    type: 'POST',
    url: url,
    data: String(formData),
    dataType: 'json',
    success: 'callback'
});

  if(usrLevel == 1){
    location.replace("http://localhost/dashboard/herramientaMusica/alumno.php");
  } else if (usrLevel == 2) {
    location.replace("http://localhost/dashboard/herramientaMusica/maestro.php")
  }



  // fetch(url + "?op=verificar", {
  //   method: 'POST',
  //   body: formData,
  // });
  // .then(response => window.location.replace("http://localhost/dashboard/herramientaMusica/maestro.php"))
  // .catch(error => console.error('Error:', error));
  /*.then(response => console.log(response));*/

});
