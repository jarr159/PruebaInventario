<?php

include ("conexion1.php");
$con= conectar();


$pr_id=$_GET['id'];


$sql = "DELETE FROM producto WHERE pr_id='$pr_id'";

$query=mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
}

?>