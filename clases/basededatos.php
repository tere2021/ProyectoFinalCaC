<?php
class conectarse{
    
    //atributos
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;

    public function __construct()
    {
        $this->user='root';
        $this->password='';
        $this->database='veterinaria';
        $this->host='localhost';
    }

    public function conecta()
    {
    //crea conexion con bd
        $this->conn=new mysqli($this->host, $this->user, $this->password, $this->database);
        if($this->conn->connect_errno){
            die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
        }
    }

    public function cerrarbd(){
        //metodo para cerrar bd
        $this->conn->close();
    }
    
    public function ejecutar($sql){

        $result = $this->conn->query($sql);
        return $result;
    }
    
    
    public function renglones(){
        //renglones de una busqueda
        return $this->conn->affected->rows;
    }

    
    public function ultimorenglon($result){
        //ultimo renglon
        return $result->fetch_row();
    }

    var $result;
    public function limpiarquery($result){
        //limpiar 
         $result->free_result();
    }
}
?>