<?php
class Conexion{
    private $dbn ='tienda';
    private $username='root';
    private $password='';

    function connection(){
        try {
            $dbh = new PDO("mysql:host=localhost; dbname=$this->dbn", $this->username, $this->password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
        return $dbh;
    }

}

$con = new Conexion;
$dbh = $con->connection();


?>
