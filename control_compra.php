<?php
session_start();
    $clave = "administrador";
    $codigo = "AES-128-ECB";


    //AGREGAR Y ELIMINAR PRODUCTOS AL CARRITO
if(isset($_POST['btn'])){
    switch($_POST['btn']){
        case 'add':
            $id = openssl_decrypt($_POST['id_producto'], $codigo, $clave);
            $nombre = openssl_decrypt($_POST['nombre'], $codigo, $clave);
            $precio = openssl_decrypt($_POST['precio'], $codigo, $clave);
            $cantidad = openssl_decrypt($_POST['cantidad'], $codigo, $clave);

            if (!isset($_SESSION['compra'])) {
                $contenido = array(
                    'id_producto' => $id,
                    'nombre' => $nombre,
                    'precio' => $precio,
                    'cantidad' => $cantidad
                );
                $_SESSION['compra'][0] = $contenido;
               
            } else {

                $productos=array_column($_SESSION['compra'],'id_producto');

                if(in_array($id,$productos)){
                    echo "<div class='alert alert-info'>El producto ya se encuentra en la cesta!</div>";
                    header("location:lista_carrito.php");
                }else{
                    $cantidadProductos = count($_SESSION['compra']);
                    $contenido = array('id_producto' => $id, 'nombre' => $nombre, 'precio' => $precio, 'cantidad' => $cantidad);
                    $_SESSION['compra'][$cantidadProductos] = $contenido;
                    header('location:lista_carrito.php');
                }
                
            }break;
        case 'delete':
            $id = openssl_decrypt($_POST['id_producto'], $codigo, $clave);
            foreach ($_SESSION['compra'] as $lista => $contenido) {
                if ($contenido['id_producto'] == $id) {
                    unset($_SESSION['compra'][$lista]);
                    $_SESSION['compra'] = array_values($_SESSION['compra']);
                    echo "<div class='alert alert-warning'>producto eliminado</div>";
                    header('location:index.php');
                }
            }
            break;
        
    }
}


//REALIZAR LA COMPRA
if(isset($_POST['realizarPedido'])){
    include('conexion.php');
    $total=0;
    $sesionId=session_id();
    foreach ($_SESSION['compra'] as $lista => $contenido) {
        $total = $total+($contenido['precio'] * $contenido['cantidad']); 
    }
    $query = $dbh->prepare("INSERT INTO compra('id_compra', 'fecha', 'importe_total') VALUES ([0],date(),:importe_total)");
    
    $query->bindParam(":cantidad",$sesionId);
    $query->bindParam(":importe_total",$sesionId);

    $query->execute();

}









?>