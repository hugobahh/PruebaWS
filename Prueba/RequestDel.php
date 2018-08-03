<?php

    //calificacion = tabla
    //8 = id_t_calificaciones
    //1 = id_usuarios

    $Url = "http://localhost/cnnTest/calificacion/8/1";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $result = curl_exec ($ch);
    curl_close ($ch);

?>


