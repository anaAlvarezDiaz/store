<?php
include("header.php");
?>
<!DOCTYPE html>

<div class="container">
    <form action="control_admin.php" class="form" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="id">ID:</label>
            <input class="form-control" type="text" name="id" id="id">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="form-control" type="text" name="nombre" id="nombre">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input class="form-control" type="number" name="precio" id="precio">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input class="form-control" type="text" name="descripcion" id="descripcion">
        </div>
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <div class="col-sm-6 pl-2">
                <input class="form-control" type="text" name="imagen" id="imagen">
            </div>
        </div>
        <div class="form-group text-right">
            <button class="btn btn-primary text-light mt-4" type="submit" name="insertar">Crear producto</button>
        </div>
    </form>
</div>


</html>