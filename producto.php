<?php

include ("conexion1.php");

$con=conectar();


$sql="SELECT * FROM producto";

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
        <title>Productos</title>
    </head>

    <body>
       

   <center> <H1>Producto</H1></center>
        <div class="container mt-5 d-flex justify-content-center" >
        
            <div class="row">
                
                <div class="col md-3">
                    <h4>Nuevo Producto</h4>
                    <form action="insertar.php" method="POST" clas="border border-dark justify-content-center" >
                    <input type="text" class="formm-control mb-3" name="pr_id" placeholder="id" >
                        <br>
                        <input type="text" class="formm-control mb-3" name="pr_nombre" placeholder="nombre" >
                        <br>
                        <input type="text" class="formm-control mb-3" name="pr_categoria" placeholder="Categoria" >
                        <br>
                        <input type="text" class="formm-control mb-3" name="pr_referencia" placeholder="Referencia" >
                        <br>
                        <input type="text" class="formm-control mb-3" name="pr_peso" placeholder="Peso" >
                        <br>
                        <input type="text" class="formm-control mb-3" name="pr_precio" placeholder="precio" >
                        <br>
                        <input type="number" class="formm-control mb-3" name="pr_stock" placeholder="stock" >
                        <br>
                        
                        <input type="submit" class="btn btn-primary mb-3">
                        <br >
                    </form>

                </div>
                <div class="col md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>pr_id</th>
                                <th>pr_referencia</th>
                                <th>pr_precio</th>
                              
                                <th>pr_stock</th>
                                <th>pr_peso</th>
                                <th>pr_categoria</th>
                                <th>pr_nombre</th>
                            </tr>

                        </thead>
                        <tbody>


                            <tr>
                                <?php while ($row=mysqli_fetch_array($query)){
                                ?>
                                <th>
                                    <?php echo $row['pr_id'] ?>
                                </th>
                                <th>
                                    <?php echo $row['pr_referencia']?>
                                </th>
                                <th>
                                    <?php echo $row['pr_precio']?>
                                </th>
                                <th>
                                    <?php echo $row['pr_stock']?>
                                </th>
                                <th>
                                    <?php echo $row['pr_peso']?>
                                </th>
                                <th>
                                    <?php echo $row['pr_categoria']?>
                                </th>
                                <th>
                                    <?php echo $row['pr_nombre']?>
                                </th>
                              
                              
                                <th>
                                    <a href="actualizar.php?id=<?php echo $row ['pr_id'] ?>" ? class="btn btn-info">
                                Editar</a>
                                </th>

                            <th><a  href="delete.php?id=<?php echo $row ['pr_id'] ?>" class="btn btn-danger">Eliminar</a></th>
                            <th><a  href="formcomprar.php?id=<?php echo $row ['pr_id'] ?>" class="btn btn-primary">Comprar</a></th>
                            </tr>
                            <?php 
                              }
                                ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>






        </div>

