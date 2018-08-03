<?php

 require_once("../Modelo/Modelo.php");

   $ID = $_GET['id'];
   //$ID = 1;
   $Estudiante = new Alumnos();
   $datEstudiante = $Estudiante->getAlumno($ID);

   $IdU = $datEstudiante[0]["id_t_usuarios"];
   $Alumno = new Alumnos();
   $datAlumno = $Alumno->getAlumnoMC($IdU);
   

   //Creamos el JSON con estos datos
   //[{id_t_usuario:1,nombre:”John”,”apellido”:”Dow”,”materia”,”programacion I”,”calificacion”:10,”fecha_registro”:”10/10/2017”},
  $Nombre = $datEstudiante[0]["nombre"];
  $AP = $datEstudiante[0]["ap_paterno"];

   $Datos = array();

   $Cont = 1;
   $Total = 0;
   for ($i = 0; $i < count($datAlumno); $i++) {
     $IdUsr = $datAlumno[$i]["id_t_usuarios"]; 
     //$Nombre =$datAlumno[$i]["nombre"]; 
     //$Apellido = $datAlumno[$i]["apellido"]; 
     $Materia = $datAlumno[$i]["materia"]; 
     $Cal = $datAlumno[$i]["calificacion"];
     $FechaReg = $datAlumno[$i]["fecha_registro"];
     //Formato a la fecha dd/mm/yyyy YYYY-mm-dd  
     $sFecha =  substr($FechaReg, 8,2) . "/" .  substr($FechaReg, 5, 2) ."/" .  substr($FechaReg, 0, 4);
     //echo $sFecha;
     //Promedio
     $Cont = $Cont + 1; 
     $Total = $Total + $Cal;
     $Datos[] = array('id_t_usuario'=>$IdUsr, 'nombre'=>$Nombre, 'apellido'=>$AP, 'materia'=>$Materia, 'calificacion'=>$Cal, 'fecha_registro'=>$sFecha);
   }
    $Res = $Total / $Cont;
    $Datos[] = array('promedio'=>$Res);
   $json_string = json_encode($Datos);
   echo $json_string;

?>

