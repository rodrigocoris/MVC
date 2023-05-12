<?php
 include ('views/db.php');




    $id = $_GET['id'];
    $result = mysqli_query($conn,"select * from productos where cod_producto = '$id'");
    $row = mysqli_fetch_assoc($result);
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $producto = $_POST['producto'];
       $nombre = $_POST['nombre'];
       $apellidos = $_POST['apellidos'];
       $telefono = $_POST['telefono'];
        $resultt = mysqli_query($conn,"update productos set producto = '$producto', nombre = '$nombre', apellidos = '$apellidos', telefono = '$telefono' where cod_producto = '$id'");
       
        if($resultt){
        header('location: crud');
        }
    }

 ?>