<!DOCTYPE html>
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
                
            <div class="col-lg-6 text-center">
                <hr/>
                <?php  $Nombre = strtoupper($datEstudiante[0]["nombre"] . " " .  $datEstudiante[0]["ap_paterno"] . " " . $datEstudiante[0]["ap_materno"]);
                  echo $Nombre;
                ?>

                <table class="table">
                    <tr>
                       <td><strong>ID</strong></td>
                        <td><strong>MATERIA</strong></td>
                        <td><strong>CALIFICACION</strong></td>
                        <td><strong>ACTIVO</strong></td>
                         <td><strong>MOD</strong></td>
                         <td><strong>XXX</strong></td>
                    </tr>
                    <?php
                      for ($i = 0; $i < count($datAlumno); $i++) {
                     ?>
                        <tr>

                            <td><?php echo $datAlumno[$i]["id_t_calificaciones"]; ?></td>
                            <td><?php echo $datAlumno[$i]["nombre"]; ?></td>
                            <td><?php echo $datAlumno[$i]["calificacion"]; ?></td>
                            <td><?php echo $datAlumno[$i]["activo"]; ?></td>
                            <td><?php echo $datAlumno[$i]["id_t_calificaciones"]; ?></td>
                            <td><?php echo $datAlumno[$i]["id_t_calificaciones"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
                <?php echo date("d.m.Y"); ?>
            </footer>
        </div>
    </body>
</html>

