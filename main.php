<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Models\{Estudiante,Curso};
use App\Controllers\Matricula;

$mat = new Matricula(234,"2022-I");
$mat->agregar(new Estudiante("Felix",123, 17));
$mat->agregarCurso(new Curso("Lenguaje", "Sonia Ronquillo"));
$mat->agregarCurso(new Curso("Arte","Patricio robles"));


foreach($mat->listar() as $estudiante){
    echo"\n";
    echo"+++++++++Matricula++++++"."\n";
    echo "Codigo de matricula: ".$mat->getCodMat()."\n";
    echo "Semestre: ".$mat->getSemestre()."\n";
    echo"\n";
    echo"-------Estudiante-----"."\n";
    echo "Nombre: ".$estudiante->getNombre()."\n";
    echo "Codigo: ".$estudiante->getCodigo()."\n";
    echo "Edad: ".$estudiante->getEdad()."\n";

    echo"\n";
    echo"*******Cursos******"."\n";
    foreach($mat->mostrar() as $curso)
    {
        echo "Curso: ".$curso->getNombre()."\n";
        echo "Docente: ".$curso->getNomDoc()."\n";
    }
}
