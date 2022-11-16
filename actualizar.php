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
    <title>Editar Producto</title>
</head>
<body>

<a href="http://localhost/inventario/producto.php">Regresar</a>

    <div class="container mt-5">
        <form action="update.php" method="POST">

                        <label>id</label>
                        <input type="text" class="formm-control mb-3" name="pr_id" placeholder="id" value="<?php echo $row ['pr_id']?>">
                        <br>
                        <label>Nombre</label>
                        <input type="text" class="formm-control mb-3" name="pr_nombre" placeholder="nombre" value="<?php echo $row ['pr_nombre']?>">
                        <br>
                        <label>Categoria</label>
                        <input type="text" class="formm-control mb-3" name="pr_categoria" placeholder="Categoria" value="<?php echo $row ['pr_categoria']?>">
                        <br>
                        <label>Referecnia</label>
                        <input type="text" class="formm-control mb-3" name="pr_referencia" placeholder="Referencia" value="<?php echo $row ['pr_referencia']?>">
                        <br>
                        <label>Peso</label>
                        <input type="text" class="formm-control mb-3" name="pr_peso" placeholder="Peso" value="<?php echo $row ['pr_peso']?>">
                        <br>
                        <label>Existencia o stock</label>
                        <input type="number" class="formm-control mb-3" name="pr_stock" placeholder="Stock" value="<?php echo $row ['pr_stock']?>">
                        <br>
                        <label>Precio</label>
                        <input type="text" class="formm-control mb-3" name="pr_precio" placeholder="Precio" value="<?php echo $row ['pr_precio']?>">
                        <br>
                        
                       
                        <input type="submit" class="btn btn-primary" value="Guardar cambios">


        </form>
    </div>
    
</body>
</html>

