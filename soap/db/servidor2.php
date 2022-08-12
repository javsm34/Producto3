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
		//$consulta = "SELECT * FROM " . $table;
		$consulta = "SELECT * FROM usuarios";
		$tabla = $adapter->query($consulta, Adapter::QUERY_MODE_EXECUTE);
		$cadhtml = "<table border='1'>";
		$numcampos = count($arrnomcampos);
		$cadhtml .= "<tr>";
		for($i=0; $i<$numcampos; $i++){
			$cadhtml .= "<th>" . $arrnomcampos[$i] . "</th>";
		}
		$cadhtml .= "</tr>";
		while($renglon=$tabla->current()){
			$cadhtml .= "<tr>";
			for($i=0; $i<$numcampos; $i++){
				$cadhtml .= "<td>" . $renglon[$arrnomcampos[$i]] . "</td>";
			}
			$cadhtml .= "</tr>";
			$tabla->next();
		}
		$cadhtml .= "</table>";
		return $cadhtml;  
	}
	$ac = array('uri' => "http://localhost/producto3/soap/db/"); 
	$server = new Server(null, $ac);
	$server->addFunction("obtTabla");
	$server->handle();
?>