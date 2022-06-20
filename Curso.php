<?php

namespace App\Models;

class Curso
{
    private $nombre;

    private $nomDoc;

    public function __construct($nombre, $nomDoc)
    {
        $this->nombre = $nombre;

        $this->nomDoc = $nomDoc;
    
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    public function getNombre()
    {
     return $this->nombre;
    }

    public function setnomDoc($nomDoc)
    {
        $this->nomDoc = $nomDoc;
    }

    public function getNomDoc()
    {
        return $this->nomDoc;
    }
}
