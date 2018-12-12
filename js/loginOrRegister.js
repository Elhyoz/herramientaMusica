
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
    url: "API/usuarios.php?op=insertar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,

    success: function(datos){
      if(datos == "Error al registrar"){
        alert(datos)
      } else {
        jzon = JSON.parse(datos)
        console.log(jzon)
        if(jzon.usrLevel == '1'){
          location.replace("http://localhost/dashboard/herramientaMusica/alumno.php")
        } else if(jzon.usrLevel == '2'){
          location.replace("http://localhost/dashboard/herramientaMusica/maestro.php")
        } else {
          console.log("hubo un error" + jzon.usrLevel)
        }
      }
    },
    error: function(e){
      alert("hubo un error")
      console.log(e)
    }
  });



  // fetch(url + "?op=verificar", {
  //   method: 'POST',
  //   body: formData,
  // });
  // .then(response => window.location.replace("http://localhost/dashboard/herramientaMusica/maestro.php"))
  // .catch(error => console.error('Error:', error));
  /*.then(response => console.log(response));*/

});
