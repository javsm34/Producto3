<?php
    header("Content-Type:text/html");
  $moviles = array(
    1 => 'Apple iPhone 6S',
    2 => 'Samsung Galaxy S6',
    3 => 'Apple iPhone 6S Plus',
    4 => 'LG G4',
    5 => 'Samsung Galaxy S6 edge',
    6 => 'OnePlus 2'
    );
        $respuesta = "<table border='1'>";
        foreach($moviles as $clave => $valor){
            $respuesta .= "<tr><td>" . $clave . 
                          "</td><td>" . $valor . "</td></tr>";
        }
        $respuesta .= "</table>";

    
    echo $respuesta;
?>