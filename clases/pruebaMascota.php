<?php
require_once("Mascota.php");

$mas1 = new Mascota();

$mas1->setNombre("Sol");
$mas1->setEdad(2);
$mas1->setTipo("Gato");
$mas1->setDuenio("Felipe");

print_r($mas1->mostrarDatos());

