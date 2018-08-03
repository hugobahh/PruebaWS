<?php
    require_once("../Modelo/Modelo.php");
    $Alumno = new Alumnos();
    $datos = $Alumno->getAlumno();
    require_once("../Vista/Vista.php");
?>

