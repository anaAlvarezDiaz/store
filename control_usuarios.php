<?php
//session_start();

class Registrado
{
    private $id_usuario;
    private $username;
    private $password;
    private $nombre;
    private $apellido;
    private $direccion;
    private $telefono;

    //REGISTRO USUARIOS
    function registrar()
    {
        include("conexion.php");
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        $this->nombre = $_POST['nombre'];
        $this->apellido = $_POST['apellidos'];
        $this->direccion = $_POST['direccion'];
        $this->telefono = $_POST['telefono'];

        $registro = $dbh->prepare("SELECT * FROM registrado WHERE username = '$this->username'");
        $registro->execute();
        $num = $registro->rowCount();
        //si el usuario existe en la base de datos
        if ($num > 0) {
            echo "<div class='alert alert-info'>El nombre de usuario ya existe!</div>";
        } else {
            echo "<div class='alert alert-info'>El nombre de usuario no existe!</div>";
            //si no existe se crea en la tabla de registrados    
            $add = $dbh->prepare("INSERT INTO registrado(id_usuario, nombre, apellido, direccion, telefono, username, password) 
                    VALUES ('[0]', '$this->nombre', '$this->apellido', '$this->direccion', '$this->telefono', '$this->username', '$this->password')");
            $add->execute();
        }
    }
}



if (isset($_POST["registro"])) {
    $usuario = new Registrado;
    $registro = $usuario->registrar();
}


function loginAdmin(){
    include('conexion.php');
    $username = $_POST['username'];
    $password=$_POST['password'];
    $query=$dbh->prepare("SELECT * FROM admin WHERE name='$username' AND password='$password'");
    $query->execute();

    if($username=='admin' && $password=='admin'){
        echo ("<script type='text/javascript'>windoww.location.href='agregar_productos.php'");
        header("location:agregar_productos.php");
    }else{
        loginUser();
    }
}

function loginUser(){
    include('conexion.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = $dbh->prepare("SELECT * FROM registrado WHERE name='$username' AND password='$password'");
    $query->execute();

    if ($dbh->rowCount($query)==0) {
        echo "<div class='alert alert-info'>El usuario no se encuentra en nuestra base de datos</div>";
        header("location:index.php");
    }else{
        $_SESSION ['compra'];
    }
}




if(isset($_POST['login'])){
    loginUser();
    loginAdmin();
}









?>