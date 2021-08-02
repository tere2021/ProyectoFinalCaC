<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="description" content="Veterinaria Lolo">
    <meta name="keywords" content="Veterinaria">   
    <meta name="author" content="Codo a Codo 4.0">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="shortcut icon" href="./images/ico.png">
    <title>Veterinaria Lolo</title>

    <!-- Link´s CSS -->
  
    <link rel="stylesheet" href="./css/signin.css">           
</head>
<body>

<?php
echo $_POST['inputEmail'] . "<BR>";
echo $_POST['inputPassword'] . "<BR>";

require("./clases/basededatos.php");

$NuevaConexion = new conectarse();
$NuevaConexion->conecta();

$query = "select * from cliente where email = '" . $_POST['inputEmail'] .
                                        "' and  clave = " . $_POST['inputPassword'];
echo $query;
$result = $NuevaConexion->ejecutar($query);      
$row_cnt = $result->num_rows;

echo "<BR>". "Cantidad de usuarios encontrados: ";
echo $row_cnt ;

?>


<script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/form.js"></script>
</body>
</html>