<?php
    require 'Consulta.php';
    
    $sqlcon= "SELECT * FROM usuarios";
    $tipoConsulta =0; //0 - select, 1 - insert, update, delete

    $c= new Consulta('localhost','producto3', 'root','',$sqlcon, 
                    $tipoConsulta,'application/jso' );
                                   
    /*$c= new Consulta('localhost', 'producto3', 'root','', $sql, 
                     $tipoConsulta, 'application/json');
     echo $c->respuesta;
     */
    
    //PRODCUTO 3 HACER LA CLASE CONCULTA
    //en el constructor se se va a pasar
    //hago el acceso con laminas, le quito el formato y lo muestro como en los ejemplos
    echo $c->respuesta;
    // la respuesta me la dara en formato json

    
?>