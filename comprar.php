<?php

include("conexion1.php");


$con=conectar();




function rest($prstock,$cantidad){


$r = $pr_stock - $cantidad;
return $r;

};
   
    
    $cantidad=$_POST['cantidad'];
    $pr_nombre = $_POST['pr_nombre'];
    $pr_id = $_POST['pr_id'];
    $pr_stock = rest();
    

    $sql ="INSERT INTO producto VALUES ('$cantidad)";

 

$sql ="UPDATE producto SET  pr_stock = '$pr_stock'";

$query= mysqli_query($con,$sql);

if ($query) {
    Header(

        "Location: producto.php");
    
}


?>