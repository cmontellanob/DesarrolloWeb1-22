<?php
class Alimentos
{
    public $nombre;
    public $tipo;
    public $cantidad;
    public function __construct($nombre, $tipo, $cantidad)
    {
        $this->nombre=$nombre;
        $this->tipo=$tipo;
        $this->cantidad=$cantidad;
    }
}
class ListaAlimentos
{
    public $Lista=[];
    private $frente=0;
    public function Insertaralimento($alimento)
    {

        $this->Lista[]=$alimento;
    }
    public function Eliminaralimento()
    {
        if ($this->frente<count($this->Lista))
        {
            $this->Lista[$this->frente]=null;
            $this->frente++;
        }
       
    }
    public function Mostrarlista()
    {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Tipo</th>";
        echo "<th>Cantidad</th>";
       
        for ($i=$this->frente; $i < count($this->Lista); $i++) { 
            echo "<tr>";
            echo "<td>". $this->Lista[$i]->nombre."</td>";
            echo "<td>". $this->Lista[$i]->tipo."</td>";
            echo "<td>". $this->Lista[$i]->cantidad."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

}