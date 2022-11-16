<?php

include("conexion1.php");


$con=conectar();

    $pr_id=$_POST['pr_id'];
    $pr_nombre=$_POST['pr_nombre'];
    $pr_categoria=$_POST['pr_categoria'];
    $pr_referencia=$_POST['pr_referencia'];
    $pr_peso=$_POST['pr_peso'];
    $pr_precio=$_POST['pr_precio'];
    $pr_stock=$_POST['pr_stock'];



$sql ="UPDATE producto SET  pr_stock ='$pr_stock',pr_precio ='$pr_precio',pr_nombre ='$pr_nombre',pr_categoria='$pr_categoria',pr_referencia='$pr_referencia',pr_peso='$pr_peso' WHERE pr_id='$pr_id'";

$query= mysqli_query($con,$sql);

if ($query) {
    Header(

        "Location: producto.php");
    
}


?>