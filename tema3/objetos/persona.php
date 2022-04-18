<?php 
class persona 
{
    public $nombre;
    public $apellido;
    public $edad;
    public $ci;
    public $sexo;

    public function __construct($nombre, $apellido, $edad, $ci, $sexo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->ci = $ci;
        $this->sexo = $sexo;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido=$apellido;
    }
    public function imprimirNombreCompleto()
    {
        echo $this->nombre . " " . $this->apellido;
    }
}
?>