NO use ningun FrameWork, todo lo hice con herramientas y comando en linux.
Aplique el patron Modelo-Vista-Control que se basa en arquitectura de tres capas.
La conección es con FPDO base de datos MariaDB 10.3 corriendo en linux.

Centos 7
Kernel 3.10.0-862.el7.x86_64

PHP / POO / FPDO 
5.6.37

- Validación de datos al ingresar datos para registrar calififación.


Para usar URL amigables en el archivo .htmaccess
#===============================================
 Options +FollowSymLinks
 RewriteEngine on
 RewriteBase /

# Reescribir la URL solicitada por el usuario
#   Entrada:  calificacion/ID/CAL
#   Salida: calificacion.php?id=ID&Cal=8

RewriteRule ^calificacion/([0-9]+)/([0-9]+)/?$ /cnnTest/Control/ControlEditar.php?id=$1&cal=$2


Para probar GET mediante HTTP use un link desde el browser
===========================================================


Para probar POST mediante HTTP use un from desde el browser
===========================================================


Para probar PUT mediante HTTP use curl
=======================================
<?php

    //calificacion = la tabla
    //5 = id_t_calificaciones
    //10 = id_usuarios
    $Url = "http://localhost/cnnTest/calificacion/5/10";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    $result = curl_exec ($ch);
    curl_close ($ch);

?>


Para probar DELETE mediante HTTP use curl
=======================================
<?php

    //calificacion = la tabla
    //7 = id_t_calificaciones
    //10 = id_usuarios
    $Url = "http://localhost/cnnTest/calificacion/7/10";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $result = curl_exec ($ch);
    curl_close ($ch);

?>



Me hubiera gustado aplicar las siguientes validaciones pero ya no tuve tiempo para checarlo.

Falta validación para cuando no existen calificaciones.
Falta validación en PUT para ver si existe calificación.
Falta validación en DELETE para ver si existe calificación.
Falta validación existe calificación antes de registrar.


Para usar las URL amigables con Apache se tienen que comentar una y agregar dos lineas httpd.conf, como se muestra.

<Directory "/var/www/html">
...
#AllowOverride None
AllowOverride AuthConfig
AllowOverride All
…
</Directory>
