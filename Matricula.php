<?php

namespace App\Controllers;
use App\Models\Estudiante;
use App\Models\Curso;

class Matricula
{
    private $codMat;

    private $semestre;

    private $estudiante;

    private $curso;

public function __construct($codMat, $semestre)

    {
    $this->codMat = $codMat;

    $this->semestre = $semestre;

    $this->estudiante = [];

    $this->curso = [];
    }
public function setCodMat($codMat)
    {
        $this->codMat = $codMat;
    }

public function getCodMat()
    {
    return $this->codMat;
    }

public function setSemestre($semestre)
    {
        $this->semestre = $semestre;
    }

public function getSemestre()
    {
    return $this->semestre;
    }

public function agregar(Estudiante $estudiante)
    {
        $this->estudiante[] = $estudiante;
    }

public function agregarCurso(Curso $curso)
    {
        $this->curso[] = $curso;
    }
public function listar()

    {
        return $this->estudiante;
    }

public function mostrar()
    {
        return $this->curso;
    }
}
