<?php
include('control_compra.php');
include('header.php');
?>

<?php if (!empty($_SESSION['compra'])) { ?>
    <div class="container m-auto">
        <table class="table mt-5">
            <thead class="">
                <tr>
                    <th>
                        <h3 class="mt-10">Lista de pedidos</h3>
                    </th>
                </tr>
            </thead>
            <tbody class="table table-light">
                <tr>
                    <th width="40%">Descripcion</th>
                    <th width="40%">Precio</th>
                    <th width="40%">Cantidad</th>
                    <th width="40%">Total</th>
                    <th width="40%"></th>
                </tr>
                <?php $total = 0; ?>
                <?php foreach ($_SESSION['compra'] as $lista => $contenido) { ?>
                    <form action="control_compra.php" method="post">
                    <tr>
                        <td><?php echo $contenido['nombre']; ?></td>
                        <td><?php echo $contenido['precio']; ?></td>
                        <td><?php echo $contenido['cantidad']; ?></td>
                        <td><?php echo number_format($contenido['precio'] * $contenido['cantidad'], 2); ?></td>
                        <td>                          
                                <input type="hidden" name="id_producto" value="<?php echo openssl_encrypt($contenido['id_producto'], $codigo, $clave)  ?>">
                                <button class="btn btn-danger" name="btn" value="delete" type="submit">Eliminar</button>         
                        </td>
                    </tr>
                    <?php $total = number_format($total + ($contenido['precio'] * $contenido['cantidad']), 2); ?>
                    <input type="hidden" name="total" value="<?php echo $total?>">
                <?php } ?>
                <tr class="table-dark">
                    <td colspan="3"></td>
                    <td>
                        <?php echo $total?>
                    </td>
                    <td>

                    <?php if(isset($_SESSION['registrado'])):?>
                        <button class="btn btn-success" name="realizarPedido" type="submit">Comprar</button>
                    <?php else:?>
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#registro">Registro</button>
                    <?php endif;?>
                    </td>
                </tr>
                </form>
            </tbody>
        </table>

    </div>

<?php } else { ?>
    <div class="alert alert-primary">¡Aún no tienes ningún artículo en la cesta!</div>
<?php } ?>

