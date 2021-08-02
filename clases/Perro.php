<?php
class Perro extends Mascota{
    private $cuidador = false;
    private $pedigree = false;


    public function mostrarDatos()
    {
        echo "Tipo= Perro, ". "Nombre= {$this->getNombre()}";
    }

    public function hacerCuidador(){
        $this->cuidador = true;
    }
    public function getCuidador(){
        if($this->cuidador) {
            return "El perro " . $this->getNombre() . " es cuidador";
        }
        return "No";
    }
}