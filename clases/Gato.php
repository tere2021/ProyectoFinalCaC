<?php
class Gato extends Mascota{

    public function mostrarDatos()
    {
        echo "Tipo= Gato, ". "Nombre= {$this->getNombre()}";
    }
}
