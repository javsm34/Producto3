<?php
	class Consulta {
		public $servidor, $basedatos, $usuario, $password;
		public $sqlcon, $tipoConsulta, $http_accept;
		public $respuesta;
		//constructor
		public function __construct($s, $bd, $u,$pas, $consql, $tC, $h_a){
			$this->servidor = $s;
			$this->usuario = $bd;
			$this->password = $pas;
			$this->sqlcon = $consql;
			$this->tipoConsulta = $tC;
			$this->http_accept = $h_a;
		}
		//private function(){}//las hago si las necesito
	}
?>