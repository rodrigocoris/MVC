<?php

 include ('views/db.php');

 if(!empty($_POST['nombre'])){

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  
  $query = mysqli_query($conn,"INSERT INTO usuarios(nombre,correo,contrasena) VALUES ('$nombre','$correo','$contrasena')");
  
  if($query){
      header('location:login');
  }
}
?>