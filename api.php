<?php
    
    header("Content-type:application/json; charset:UTF-8");
    
    $nombre =(string) "Fred";
    // <<<Text Text valida el tipo de dato
    // echo <<<JSON
    //     {
    //         nombre: '${nombre}'
    //     }
    // JSON;

    $obj = (object) [];

    $obj->nombre = (string) "Juan J";
    $obj->apellido = (string) "Duran R";
    $obj->edad = (integer) 17;

    echo json_encode($obj);

?>