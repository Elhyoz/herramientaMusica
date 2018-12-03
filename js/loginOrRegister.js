var user, email, pwd, numBoleta, apPaterno, apMaterno, repeatPwd, arrayForm;

$("#targetSignUp").submit(function(event) {

  alert("Qué pedo");



  event.preventDefault();
});

$("#targetRegister").submit(function(event){
  user = $("#nameUser").val();
  email = $("#email").val();
  pwd = $("#pwd").val();
  repeatPwd = $("#repeatPwd").val();
  numBoleta = $("#numBoleta").val();
  apPaterno = $("#apP").val();
  apMaterno = $("#apM").val();


  
  console.log(pwd);
  console.log(repeatPwd);

  event.preventDefault();
});
