<?php
  
class Cornuda{
    private $apodo;
    private $dni;
    private $amantes;

    public function setApodo($apodo){
        $this->apodo = $apodo;
    }

    public function setDni($dni){
        $this->dni = $dni;
    }

    public function setAmante($amante){
        $this->amantes = $amante;
    }


    public function getApodo(){
        return $this->apodo;
    }

    public function getDni(){
        return $this->dni;
    }

    
    public function getAmantes(){
        return $this->amantes;
    }
}

 abstract class Mascota{ //No puede ser instanciada
    private $nombre;
    private $edad;
    private $duenio;

    public function __construct($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public abstract function mostrarDatos();

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }


    public function getDuenio()
    {
        return $this->duenio;
    }

    public function setDuenio($duenio)
    {
        $this->duenio = $duenio;
    }



}

