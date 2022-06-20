<?php
class Operaciones
{
    public function factorial($numero)
    {
        if ($numero == 0) {
            return 1;
        } else {
            return $numero * $this->factorial($numero - 1);
        }
        
    }
}