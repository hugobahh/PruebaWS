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
                <h3>Listado de alumnos</h3>
                <table class="table">
                    <tr>
                       <td><strong>LISTA</strong></td>
                        <td><strong>NOMBRE</strong></td>
                        <td><strong>APELLIDO P.</strong></td>
                        <td><strong>APELLIDO M.</strong></td>
                        <td><strong>ACTIVO</strong></td>
                        <td><strong>CALIFICACION</strong></td>
                    </tr>
                    <?php
                      for ($i = 0; $i < count($datos); $i++) {
                     ?>
                        <tr>

                            <td><a href="../Control/ControlMC.php?id=<?php echo $datos[$i]["id_t_usuarios"]?>"><?php echo $datos[$i]["id_t_usuarios"]; ?></a></td>
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td><?php echo $datos[$i]["ap_paterno"]; ?></td>
                            <td><?php echo $datos[$i]["ap_materno"]; ?></td>
                            <td><?php echo $datos[$i]["activo"]; ?></td>
                            <td><a href="../Control/ControlCal.php?id=<?php echo $datos[$i]["id_t_usuarios"]?>">REG</a></td>


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

