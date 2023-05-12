<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-    EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">
</head>
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









<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    

                <div class="text-center">
                  <img src="https://thumbs.dreamstime.com/b/vector-de-icono-usuario-inicio-sesi%C3%B3n-simple-en-un-estilo-dise%C3%B1o-moderno-para-sitio-web-y-aplicaci%C3%B3n-m%C3%B3vil-eps-ilustraci%C3%B3n-169793239.jpg"
                    style="width: 185px;" alt="logo">
                    <br>
                    <br>
                  <h4 class="mt-1 mb-5 pb-1">Bienvenido al inicio de sesion</h4>
                </div>

                <form action="log" method="POST">
                  <p>Por favor introduce tu cuenta</p>

              

                  <div class="form-outline mb-4">
                     <label class="form-label" for="form2Example11">Usuario: </label>
                    <input type="email" id="form2Example11" name="correo" class="form-control" placeholder="Ingresa tu usuario" />
                   
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Contraseña:</label>
                    
                    <input type="password" id="form2Example22" name="contrasena" class="form-control" placeholder="Ingresa tu contraseña"/>
      
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                  <input type="submit" value="Agregar" class="btn btn-primary btn-block">
                    <a class="text-muted" href="registro">Olvidaste tu contraseña?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Aun no tienes una cuenta?</p>
                  <a href="registro"> <button type="button" class="btn btn-outline-danger">Crear cuenta ahora</button></a>
                        
                  </div>

                </form>

  </div>



  

</body>
</html>