<?php
    header("Content-Type:application/json");
  $moviles = array(
    1 => 'Apple iPhone 6S',
    2 => 'Samsung Galaxy S6',
    3 => 'Apple iPhone 6S Plus',
    4 => 'LG G4',
    5 => 'Samsung Galaxy S6 edge',
    6 => 'OnePlus 2'
    );
    $respuesta = json_encode($moviles);
    echo $respuesta;
?>