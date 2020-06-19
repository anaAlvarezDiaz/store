<?php
include_once('conexion.php');
session_start();

//definición de la clase Producto que contendrá la información de cada producto
class Productos{
    private $id_producto;
    private $nombre;
    private $precio;
    private $descripcion;
    private $imagen;

    //FUNCIONES PARA EL CONTROL DE LOS PRODUCTOS
    //Agregar productos
    function agregar($id_producto, $nombre, $precio, $descripcion, $imagen){
        include('conexion.php');
        $id_producto = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
        
        $add = $dbh->prepare("INSERT INTO productos (id_producto, nombre, precio, descripcion, imagen) VALUES(?,?,?,?,?)"); 
        
        if ($add->execute([$this->id_producto, $this->nombre, $this->precio, $this->descripcion, $this->imagen])) {
            echo "Artículo introducido con éxito";
        } else {
            echo "Error al introducir los datos";
        }

    }
}


if (isset($_POST["insertar"])) {
    $producto = new Productos;
    $producto->agregar();
}













?>