<SCRIPT language=javascript>

function ChecarCampos(){
  if (document.frmCal.txtCal.value==''){
    alert ('Por favor escriba un valor para la calificación.');
    window.document.frmCal.txtCal.select();
    window.document.frmCal.txtCal.focus();
    return false;
  }
  else if (document.frmCal.txtCal.value == '0'){
    alert('Por favor un valor mayor que cero.')
    window.document.frmCal.txtCal.select();
    window.document.frmCal.txtCal.focus();
    return false;
  }
  else{
     var Num = document.frmCal.txtCal.value; 
     if (Num < 0){
       alert('Por favor un valor mayor que cero.');
       window.document.frmCal.txtCal.select();
       window.document.frmCal.txtCal.focus();
       return false;
     }
     else{
       window.document.frmCal.submit();
       return true;
     }
  }
}

</SCRIPT>

<?php
  //Id del alumno
  $ID = $_GET['id'];
?>

 <head>
        <meta charset="UTF-8">
        <title>Ejemplo de PHP</title>      
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>Ejemplo de PHP</h1>
                <hr/>
                <p class="lead"></p>
            </header>
            <div class="row">
                <div class="col-lg-6">
 
                    <form name="frmCal" action="../Control/ControlNewCal.php" method="post" class="col-lg-5">
                        <h2>
		 <?php  $Nombre = strtoupper($datAlumno[0]["nombre"] . " " .  $datAlumno[0]["ap_paterno"] . " " . $datAlumno[0]["ap_materno"]);
		 echo $Nombre;
		?>
		</h2>
                  <h3>Materia:</h3> <select name="cmbMateria">
                   <?php
                     for ($i = 0; $i < count($datMaterias); $i++) {
                      echo ("<option value='".$datMaterias[$i]['id_t_materias']."'>".$datMaterias[$i]['nombre']."</option>"); 
                     }
                   ?>
                   </select> 
                   <h3>Calificación:</h3>
                    <input type="number" name="txtCal" min="1" pattern="^[0-9]+" class="form-control"/>  
                    <input type="hidden" name="txtID" value="<?php echo $ID ?>"class="form-control"/>
                        <br/>

                        <input type="button" value="Crear" class="btn btn-success" onClick="JavaScript:ChecarCampos();"></>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>                          <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                <?php echo date("d.m.Y"); ?>
            </footer>
        </div>
    </body>
</html>
