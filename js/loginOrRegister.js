
var user, email, pass, numBoleta, apPaterno, apMaterno, repeatPwd, arrayForm;


$("#targetSignUp").submit(function(event) {
  user = $("#usr").val();
  email = $("#usr").val();
  pass = $("#pwd").val();
  console.log(user);
  console.log(pass);

});


$("#targetRegister").submit(function(event){
  user = $("#nameUser").val();
  email = $("#email").val();
  pass = $("#pass").val();
  repeatPwd = $("#repeatPwd").val();
  numBoleta = $("#numBoleta").val();
  apPaterno = $("#apP").val();
  apMaterno = $("#apM").val();

  if(pass != repeatPwd){
    alert("Contaseñas no coinciden.");
    event.preventDefault();
  }


});
