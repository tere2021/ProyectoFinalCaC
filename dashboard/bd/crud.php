<?php
include_once '../bd/conexion.php';
$objeto= new Conexion();
$conexion=$objeto->Conectar();
//recepcion datos enviados mediante post desde JS

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido']))  ? $_POST['apellido'] : '';
$email = (isset($_POST['email']))  ? $_POST['email'] : '';
$telefono = (isset($_POST['telefono']))  ? $_POST['telefono'] : '';
$opcion = (isset($_POST['opcion']))  ? $_POST['opcion'] : '';
$id = (isset($_POST['id']))  ? $_POST['id'] : '';

switch($opcion){
    case 1://ALTA
        $consulta ="INSERT INTO cliente (nombre, apellido, email, telefono) VALUES('$nombre', '$apellido', '$email', '$telefono') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta ="SELECT id,  nombre, apellido, email, telefono FROM cliente ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchALL(PDO::FETCH_ASSOC);
        break;
    case 2://MODIFICACION
        $consulta ="UPDATE cliente SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono' WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta ="SELECT id, nombre, apellido, email, telefono FROM cliente WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchALL(PDO::FETCH_ASSOC);
        break;
    case 3://BAJA
        $consulta ="DELETE FROM  cliente WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar array final en formato json a JS
$conexion=NULL;

