<?php
	require_once '../../vendor/autoload.php';

	use Laminas\Soap\Client;

	$url = "http://localhost/producto3/soap/db/servidor.php";
	
	$ac = array(
		'location' => $url,
		'uri' => "http://localhost/producto3/soap/db/"
	);
	$cliente = new Client(null, $ac);
	$arrNombreCampos = array("email", "contrasena");
	$cad = $cliente->obtTabla('Mysqli', 'producto3', 'root', '', 'usuarios', $arrNombreCampos);
	echo $cad;
?>

