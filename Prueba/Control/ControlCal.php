<?php

 require_once("../Modelo/Modelo.php");

   $ID = $_GET['id'];

   $Estudiante = new Alumnos();
   $datMaterias = $Estudiante->getMaterias();

   $Alumno = new Alumnos();
   $datAlumno = $Alumno->getAlumno($ID);
   require_once("../Vista/VistaRegCal.php");
   
?>

