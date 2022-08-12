<?php
    //header("HTTP/1.1 500");
    $cad = "";
    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            $cad="GET";
            break;
        case "POST":
            $cad="POST";
            break;
        case "PUT":
            $cad="PUT";
            break;
        case 'DELETE':
            $cad="DELETE";
            break;
    }
    echo $cad;
    
?>
