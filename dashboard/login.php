<?php
session_start();

include_once("bd/conexion.php");
$objeto = new Conexion();
$conexion = $objeto->Conectar();


//recepcion de datos enviados via POST desde Ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5 ($password);
$query = "SELECT * FROM admin WHERE nombre='$usuario' AND clave ='$pass'";

$result = $conexion->prepare($query);      
$result->execute();


if ($result->rowCount() >=1 ){
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}
print json_encode($data);
$conexion=null;

?>
