<?php
include("persona.php");
class alumno extends persona
{
    public $carrera;
    public $CU;

    public function __construct($nombre, $apellido, $edad, $ci, $sexo, $carrera, $CU)
    {
        parent::__construct($nombre, $apellido, $edad, $ci, $sexo);
        $this->carrera = $carrera;
        $this->CU = $CU;
    }
    public function imprimirDatosAlumnos()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "CI: " . $this->ci . "<br>";
        echo "Sexo: " . $this->sexo . "<br>";
        echo "Carrera: " . $this->carrera . "<br>";
        echo "CU: " . $this->CU . "<br>";
    }
}