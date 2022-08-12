<?php
  $moviles = array(
    1 => 'Apple iPhone 6S',
    2 => 'Samsung Galaxy S6',
    3 => 'Apple iPhone 6S Plus',
    4 => 'LG G4',
    5 => 'Samsung Galaxy S6 edge',
    6 => 'OnePlus 2'
    );
    $respuesta ="";
    switch ($_SERVER['HTTP_ACCEPT']) {
        case 'application/json':
            header("Content-Type:" . $_SERVER['HTTP_ACCEPT']);
            $respuesta = json_encode($moviles);
            break;
        
        case 'text/html':
            header("Content-Type:text/html");
            $respuesta = "<table border='1'>";
            foreach ($moviles as $clave => $valor) {
                $respuesta .="<tr><td>" . $clave . 
                            "</td><td>" . $valor . "</td></tr>"; 
            }
            $respuesta .= "</table>";
            break;

        case 'application/xml':
            header("Content-Type:application/xml");
            $xml = new SimpleXMLElement('<?xml version="1.0"?><movil></movil>');
            foreach ($moviles as $clave => $valor) {
                $xml->addChild($clave , $valor);
            }
            $respuesta=$xml->asXML();
            break;
    } 
    echo $respuesta;
    
?>