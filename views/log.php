<?php
 include ('views/db.php');
//encontar la base de datos con los campos de texto

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];


//conectar a la base de datos
$con=mysqli_connect("localhost", "root", "", "crudphp");
$consulta="SELECT * FROM usuarios WHERE correo= '$correo' and contrasena='$contrasena' ";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

//validar con 1 y 0 
if ($filas>0) {
   header("Location: crud");
   
}
else{
   header("Location: login");
   
}

mysqli_free_result($resultado);
mysqli_close($con);

?>
