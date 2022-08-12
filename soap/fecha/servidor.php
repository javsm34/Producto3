<?php
	require_once '../../vendor/autoload.php';
	
	use Laminas\Soap\Server;
	
	function fecha(){ 
		return date("d/m/Y"); 
	}
	
	/*
	$server = new Server(
		null,
		array(
			'uri' => "http://localhost/producto3/soap/fecha/"
		)
	);
	*/
	$ac = array('uri' => "http://localhost/producto3/soap/fecha/"); 
	$server = new Server(null, $ac);
	$server->addFunction("fecha");
	$server->handle();
?>