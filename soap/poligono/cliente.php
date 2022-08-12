<?php
	
	require_once '../../vendor/autoload.php';
	
	use Laminas\Soap\Client;
	
	$url = "http://localhost/producto3/soap/poligono/servidor.php";
	
	$ac = array(
		'location' => $url,
		'uri' => "http://localhost/producto3/soap/poligono/"
	);
	//http://localhost/producto3/soap/poligono/cliente.php?l=3&r=200&cx=200&cy=200
	$lados=$_GET['l'];
	$radio=$_GET['r'];
	$centrox=$_GET['cx'];
	$centroy=$_GET['cy'];
	$cliente = new Client(null, $ac);
	$ap=$cliente->calcularPuntosPoligonoEnCirculo($lados, $radio, $centrox, $centroy);
	var_dump($ap);
	$nea = count($ap);
	echo "<hr>El numero de elementos en el arreglo es:  $nea </hr>";
	for($i=0;$i<$nea;$i++){
		echo "(" . $ap[$i]->x . ", " . $ap[$i]->y .")<br/>";
	}
?>