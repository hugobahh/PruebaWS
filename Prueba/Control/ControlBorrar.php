<?php
 require_once("../Modelo/Modelo.php");
 $Alumno = new Alumnos();

 $Metodo = getenv('REQUEST_METHOD');
 //echo ("Metodo: " . $Metodo);
 $Call = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
 //var_dump($Call);
 $Resource = $Call['1'];
 //echo ("R: " . $Resource);
 
  if($Metodo == 'DELETE'){  
  $Id = $Call['2'];
  //echo ("Id: " . $Id);

    if($Resource == 'calificacion'){
      //echo "Borrando ...";   
       //Borrar la calificacion
       if($Alumno->Borrar($Id)){
          http_response_code(201);
          header('Content-Type: application/json');
          //echo json_encode($mysqli->insert_id);
          $Arreglo = array();
          $Arreglo[] = array('success'=>'OK', 'msg'=>'calificacion eliminada');
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

