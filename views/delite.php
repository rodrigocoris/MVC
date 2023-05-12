<?php
 include ('views/db.php');

$id = $_GET['id'];
$query = "DELETE FROM productos where (cod_producto = '$id')";
$result = mysqli_query($conn,$query);
if($query){
    header('location:crud');
}

?>

