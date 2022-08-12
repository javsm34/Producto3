<?php
	require_once '../../vendor/autoload.php';
	use Laminas\Soap\Server;
	use Laminas\Db\Adapter\Adapter;
	function obtTabla($driver, $database, $username, $password, $table, $arrnomcampos){ 
		$ac = array(
			'driver' => $driver,
			'database' => $database,
			'username' => $username,
			'password' => $password
		);
		$adapter = new Adapter($ac);
		
		$consulta = "SELECT * FROM usuarios";
		$tabla = $adapter->query($consulta, Adapter::QUERY_MODE_EXECUTE);
		$numcampos = count($arrnomcampos);
		$cadjson ='[';
		$elemento='';
		
		while($renglon=$tabla->current()){
			if($elemento!=''){
				$elemento .=',';
			}
			$elemento .='{';
			for($i=0; $i<$numcampos; $i++){
				$elemento .= '"'. $arrnomcampos[$i] .'": "'. $renglon[$arrnomcampos[$i]] .'"';
			}
			$elemento.='}';
			$i++;
			$tabla->next();
			
		}
		$cadjson .= $elemento.']';
		return $cadjson;  
	}
	$ac = array('uri' => "http://localhost/producto3/soap/db/"); 
	$server = new Server(null, $ac);
	$server->addFunction("obtTabla");
	$server->handle();
?>