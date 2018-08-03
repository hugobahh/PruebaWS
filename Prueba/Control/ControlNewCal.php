<?php
   require_once("../Modelo/Modelo.php");
// require_once("../Vista/VistaAMC.php");

   header ("Content_Type:application/json");
   if (!empty($_POST['txtCal'])){ 
     $newCal = $_POST['txtCal'];
     $IdMateria = $_POST['cmbMateria'];
     $IdAlumno = $_POST['txtID'];
  
     $Alumno = new Alumnos();

     //Fecha de Hoy para mostrar con formato dd/mm/yyyy
     $FechaA = date("Y") . "-" . date("m") . "-" . date("d");
     
     //Registrar la calificacion
     if($Alumno->addCal($newCal, $IdAlumno, $IdMateria, $FechaA)){
 	http_response_code(201);
	header('Content-Type: application/json');
	//echo json_encode($mysqli->insert_id);
        $Arreglo = array();
        $Arreglo[] = array('success'=>'OK', 'msg'=>'calificacion registrada');
        $sOK = json_encode ($Arreglo);
        echo $sOK;

     } 
     else {
	http_response_code(500);
	die('Internal Server Error');
     }  

   }  // fin del if Existe $_GET
?>
