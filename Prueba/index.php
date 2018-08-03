<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['ap'])) && ($_POST['ap'] != '')) {
 
    include "Modelo/Modelo.php";
    $newAlumno = new Student();
    $asd = $newAlumno->setAlumno($_POST['nombre'], $_POST['AP']);
}
?>
<html>
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
 
                    <form action="#" method="post" class="col-lg-5">
                        <h3>Nuevo alumno</h3>                
                        Nombre: <input type="text" name="nombre" class="form-control"/>    
                        Apellido Paterno: <input type="text" name="AP" class="form-control"/>    
                        Apellido Materno: <input type="text" name="AM" class="form-control"/>
                        <br/>
                        <input type="submit" value="Crear" class="btn btn-success"/>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de alumnos</h3>
                    <a href="Control/Controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de alumnos</a>
                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                <?php echo date("d.m.Y"); ?>
            </footer>
        </div>
    </body>
</html>
