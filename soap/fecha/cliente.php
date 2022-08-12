<?php
	require_once '../../vendor/autoload.php';
	
	use Laminas\Soap\Client;
	
	$url = "http://localhost/producto3/soap/fecha/servidor.php";
	
	$ac = array(
		'location' => $url,
		'uri' => "http://localhost/producto3/soap/fecha/"
	);
	
	$cliente = new Client(null, $ac);
	$f = $cliente->fecha();
	echo "Fecha en el servidor: " . $f;
?>