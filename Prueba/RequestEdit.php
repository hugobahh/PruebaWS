<?php

    //calificacion = la tabla
    //7 = id_t_calificaciones
    //10 = id_usuarios
    $Url = "http://localhost/cnnTest/calificacion/7/10";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    $result = curl_exec ($ch);
    curl_close ($ch);

?>


