<?php
    header("Content-Type:application/xml");
  $moviles = array(
    1 => 'Apple iPhone 6S',
    2 => 'Samsung Galaxy S6',
    3 => 'Apple iPhone 6S Plus',
    4 => 'LG G4',
    5 => 'Samsung Galaxy S6 edge',
    6 => 'OnePlus 2'
    );
    $xml = new SimpleXMLElement('<?xml version="1.0"?><movil></movil>');
    foreach ($moviles as $clave => $valor) {
        $xml->addChild($clave , $valor);
    }
    $respuesta=$xml->asXML();
     
    echo $respuesta;
    
?>