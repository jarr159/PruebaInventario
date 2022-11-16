<?php

include ("conexion1.php");

$con=conectar();

$id=$_GET['id'];


$sql="SELECT * FROM producto WHERE pr_id='$id'";

$query=mysqli_query($con,$sql);


$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Comprar producto</title>
</head>
<body>

<a href="http://localhost/inventario/producto.php">Regresar</a>

    <div class="container mt-5">
        <form action="comprar.php" method="POST">

                        <label>id</label>
                        <input type="text" class="formm-control mb-3" name="pr_id" placeholder="id" value="<?php echo $row ['pr_id']?>">
                        <br>
                        <label>Nombre</label>
                        <input type="text" class="formm-control mb-3" name="pr_nombre" placeholder="nombre" value="<?php echo $row ['pr_nombre']?>">
                        <label>Cantidad</label>
                        <input type="number" class="formm-control mb-3" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad']?>">
                        <br>
                        
                       
                        
                       
                        <input type="submit" class="btn btn-primary" value="Generar compra">


        </form>
    </div>
    
</body>
</html>