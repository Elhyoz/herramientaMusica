<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrapcss/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Aprender guitarra</title>
</head>

<body>
  <!-- Comienza el navbar -->
  <div class="nav-container">

    <nav class="navbar navbar-dark bg-dark navbar-expand-md">
      <a href="" class="navbar-brand">GuitarTuto</a>
      <ul class="navbar-nav">

        <li class="nav-item">
          <a href="http://localhost/dashboard/herramientaMusica/" class="nav-link">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Navegación
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Cursos disponibles</a>
            <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item disable" href="#">Diagnóstico</a>
          </div>
        </li>
      </ul>
      <div class="customPosition">
        <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#signupModal" id="sUp">Inicia sesión</button>
        <button class="btn btn-primary my-2 my-sm-0" type="button" id="register" data-target="#registerModal" data-toggle="modal">Regístrate</button>
      </div>
    </nav>
  </div>
