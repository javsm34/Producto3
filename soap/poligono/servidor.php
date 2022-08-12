<?php
	require_once '../../vendor/autoload.php';
	require_once 'Punto.php';
	use Laminas\Soap\Server;
	
	function calcularPuntosPoligonoEnCirculo($lados, $radio, $centroX, $centroY){ 
		$arrptos= Array();
		if($lados>2){
			$anginirad = 0;
			$anglado = 2 * M_PI / $lados;
			for($i=0; $i<$lados; $i++){
				$arrptos[$i] = new Punto($centroX+$radio*cos($anginirad),
										 $centroY+$radio*sin($anginirad));
				$anginirad = $anginirad + $anglado;
			}
		}
		return $arrptos; 
	}

	$ac = array('uri' => "http://localhost/producto3/soap/poligono/"); 
	$server = new Server(null, $ac);
	$server->addFunction("calcularPuntosPoligonoEnCirculo");
	$server->handle();
?>