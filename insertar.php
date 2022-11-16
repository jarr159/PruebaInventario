<?php
include ("conexion1.php");

$con=conectar();

    $pr_id=$_POST['pr_id'];
    $pr_nombre=$_POST['pr_nombre'];
    $pr_categoria=$_POST['pr_categoria'];
    $pr_referencia=$_POST['pr_referencia'];
    $pr_peso=$_POST['pr_peso'];
    $pr_precio=$_POST['pr_precio'];
    $pr_stock=$_POST['pr_stock'];
    
   
   
  

    $sql ="INSERT INTO producto VALUES ('$pr_id','$pr_referencia','$pr_precio','$pr_stock','$pr_peso','$pr_categoria','$pr_nombre')";
    $query= mysqli_query($con,$sql);

    if ($query) {
        Header(

            "Location: producto.php");
        
    }else{

    }

?>