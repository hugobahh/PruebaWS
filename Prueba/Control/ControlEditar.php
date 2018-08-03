<?php
 require_once("../Modelo/Modelo.php");
 $Alumno = new Alumnos();

 $Metodo = getenv('REQUEST_METHOD');
 //echo ("Metodo: " . $Metodo);
 $Call = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
 //var_dump($Call);
 $Resource = $Call['1'];
 //echo ("R: " . $Resource);
 $Id = $Call['2'];
 //echo ("Id: " . $Id);
 
  if($Metodo == 'PUT'){  
  $Cal = $Call['3'];
 
   if($Resource == 'calificacion'){
      //echo "Actualizando ...";   
       //Borrar la calificacion
       if($Alumno->Actualizar($Id, $Cal)){
          http_response_code(201);
          header('Content-Type: application/json');
          //echo json_encode($mysqli->insert_id);
          $Arreglo = array();
          $Arreglo[] = array('success'=>'OK', 'msg'=>'calificacion actualizada');
          $sOK = json_encode ($Arreglo);
          echo $sOK;

       }
       else {
          http_response_code(500);
          die('Internal Server Error');
       }

     }  // FIN de Resources
  } // FIN del if PUT


  if($Metodo == 'DELETE'){
    if($Resource == 'calificacion'){
      echo "Borrar ...";
       //Actualizar la calificacion
       if($Alumno->Borrar($Id)){
          http_response_code(201);
          header('Content-Type: application/json');
          //echo json_encode($mysqli->insert_id);
          $Arreglo = array();
          $Arreglo[] = array('success'=>'OK', 'msg'=>'calificacion actualizada');
          $sOK = json_encode ($Arreglo);
          echo $sOK;

       }
       else {
          http_response_code(500);
          die('Internal Server Error');
       }

     }  // FIN de Resources
  } // FIN del if DELETE



 ?>

