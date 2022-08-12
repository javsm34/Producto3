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
	$s = $cliente->sumar($_GET['a'], $_GET['b']);
	echo "La suma de " . $_GET['a'] . " + " . $_GET['b'] . " es " . $s;
    //http://localhost/producto3/soap/suma/cliente1.php?a=5&b=3 PARA LOS VALORES DE LA URL
?>