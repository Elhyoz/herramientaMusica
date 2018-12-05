var formData;

$("#targetEvaluation").submit(function(event) {
  formData = new FormData($("#targetEvaluation")[1]);
  var url = "http://localhost/dashboard/herramientaMusica/API/alumno.php";



  event.preventDefault();
});
