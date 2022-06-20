<?php

namespace App\Models;

class Estudiante
{
    private $nombre;

    private $codigo; 

    private $edad;

    public function __construct($nombre, $codigo, $edad)
    {
        $this->nombre = $nombre;

        $this->codigo = $codigo;

        $this->edad = $edad;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
   
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    
    public function getEdad()
    {
        return $this->edad;
    }
    
}
