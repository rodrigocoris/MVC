<?php
 include ('views/db.php');
 $result = mysqli_query($conn,'SELECT * FROM usuarios');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    .n{
        margin-top: 100px;
    }
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<link rel="stylesheet" href="index.css">

  <body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="main">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login">Login <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro">Registro</a>
      </li>
    
    
      <li class="nav-item">
        <a class="nav-link" href="crud">CRUD</a>
   
      
    </ul>
   
  </div>
</nav>





  <!--Formulario-->

      <div class="container justify-items-center n">
    

<!--Crud de add------------------------------------------------->
      <form action="add2" method="POST">

   

      <h1 class="text-left"><strong>Nombre:</strong></h1>
      <br>
      <input type="text" required placeholder="Ingresa el nombre" name="nombre" class="form-control">
      <br>
 


     <br>

      <h1 class="text-left"><strong>Correo:</strong></h1>
      <br>
      <input type="text" required placeholder="Ingresa los apellidos" name="correo" class="form-control">
      <br>
    


     <br>

      <h1 class="text-left"><strong>Contrasena:</strong></h1>
      <br>
      <input type="number" required placeholder="Ingresa el telefono" name="contrasena" class="form-control">
      <br>
     

<input type="submit" value="Agregar" class="btn btn-primary btn-block">


      </form>
     

    






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>