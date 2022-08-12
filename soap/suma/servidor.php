<?php
	require_once '../../vendor/autoload.php';
	
	use Laminas\Soap\Server;
	
	function sumar($a, $b){ 
		return $a + $b; 
	}
	function restar($a, $b){ 
		return $a - $b; 
	}

	$ac = array('uri' => "http://localhost/producto3/soap/suma/"); 
	$server = new Server(null, $ac);
	$server->addFunction("sumar");
	$server->addFunction("restar");
	$server->handle(); 
?>