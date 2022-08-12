<?php
	require_once '../../vendor/autoload.php';
	
	use Laminas\Soap\Client;
	
	$url = "http://localhost/producto3/soap/suma/servidor.php";
	
	$ac = array(
		'location' => $url,
		'uri' => "http://localhost/producto3/soap/suma/"
	);
	
	$cliente = new Client(null, $ac);
	$a=5;
	$b=7;
	$s = $cliente->sumar($a, $b);
	echo "La suma de: " . $a . " + " . $b . " es " . $s;
?>