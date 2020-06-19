<?php
include('conexion.php');
include('control_compra.php');
include('header.php');

?>
<style>
    body {
        background-image: url("templates/img/fondo.jpg");
        background-size: cover;
    }
</style>

<body>


    <?php
    $query = $dbh->prepare("SELECT * FROM productos");
    $query->execute();
    $listaProductos = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($listaProductos as $producto) { ?>
                <div class="col-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5><?php echo $producto['nombre']; ?></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><img width="200" src="<?php echo $producto['imagen'] ?>" alt="" srcset="">
                            </p>
                            <p class="card-text"><?php echo $producto['descripcion'] ?></p>
                            <span class="font-weight-bolder input-group-addon "><?php echo $producto['precio'] ?>€</span>
                            <form action="control_compra.php" method="post">
                                <input type="hidden" name="id_producto" class="" value="<?php echo openssl_encrypt($producto['id_producto'], $codigo, $clave) ?>">
                                <input type="hidden" name="nombre" class="" value="<?php echo openssl_encrypt($producto['nombre'], $codigo, $clave) ?>">
                                <input type="hidden" name="precio" class="" value="<?php echo openssl_encrypt($producto['precio'], $codigo, $clave) ?>">
                                <input type="hidden" name="cantidad" class="" value="<?php echo openssl_encrypt(1, $codigo, $clave) ?>">
                                <button class="btn btn-primary m-3 float-right" name="btn" type="submit" value="add">Agregar</button>
                            </form>
                        </div>

                    </div>
                </div>

            <?php } ?>




        </div>




    </div>



</body>

</html>