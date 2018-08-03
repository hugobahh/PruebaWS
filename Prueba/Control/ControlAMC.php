<?php

 require_once("../Modelo/Modelo.php");

   $ID = $_GET['id'];
   //$ID = 1;
   $Estudiante = new Alumnos();
   $datEstudiante = $Estudiante->getAlumno($ID);

   $Id = $datEstudiante[0]["id_t_usuarios"];
   $Alumno = new Alumnos();
   $datAlumno = $Alumno->getAlumnoMC($Id);
   require_once("../Vista/VistaAMC.php");
?>

