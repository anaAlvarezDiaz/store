<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<nav class="navbar bg-dark navbar-dark navbar-expand-sm justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="navbar-brand">
                    <img src="templates/img/logo.jpg" width="90px" alt="" srcset="">
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
                <a href="lista_carrito.php" class="nav-link ">Pedidos</a>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Contacto</a>
                <div class="dropdown-menu">
                    <a href="" class="dropdown-item">La empresa</a>
                    <a href="" class="dropdown-item">Trabaja con nosotros</a>
                </div>
            </li>
        </ul>
        <!--BOTONES LOGIN Y REGISTRO-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <button class="btn btn-primary m-1" data-toggle="modal" data-target="#login">Login</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-primary m-1" data-toggle="modal" data-target="#registro">Registro</button>
            </li>
        </ul>
    </nav>

    <!--ALERTA DE COOKIES-->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Utilizamos cookies propias y de terceros para obtener datos estadísticos de la navegación de nuestros usuarios y mejorar nuestros servicios. Si acepta o continúa navegando, consideramos que acepta su uso.
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    <!--VENTANA MODAL LOGIN-->
    <div class="modal" id="login" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-light">Iniciar sesion</h5>
                    <button class="close text-light" data-dismiss="modal" aria-label="cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="control_usuarios.php" class="form" method="POST">
                        <div class="form-group">
                            <label for="username">Usuario:</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="Introduce tu nombre de usuario">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Introduce tu contraseña">
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary text-light mt-4" type="submit" name="login">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--VENTANA MODAL REGISTRO-->
    <div class="modal" id="registro" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="text-light">Registro de usuario</h5>
                    <button class="close text-light" data-dismiss="modal" aria-label="cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="control_usuarios.php" class="" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre de usuario:</label>
                            <input class="form-control" type="text" name="username" placeholder="Introduce tu usuario" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input class="form-control" type="text" name="nombre" placeholder="Introduce tu nombre" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input class="form-control" type="text" name="apellidos" placeholder="Introduce tus apellidos" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Email:</label>
                            <input class="form-control" type="text" name="correo" placeholder="Introduce tu correo electrónico" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Direccion:</label>
                            <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Dirección" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Teléfono:</label>
                            <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Nº de teléfono" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña:</label>
                            <input class="form-control" type="password" name="password" id="password" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label class="form-check-label" for="">Sexo</label>
                            <div class="btn btn-group btn-group-toggle" data-toggle="buttons">
                                <label for="" class="btn btn-warning">
                                    <input type="radio" name="sexo" id="H">Hombre
                                </label>
                                <label for="" class="btn btn-warning">
                                    <input type="radio" name="sexo" id="M">Mujer
                                </label>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary text-light mt-4" type="submit" name="registro">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
