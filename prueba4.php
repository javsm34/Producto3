<?php //https://docs.laminas.dev/laminas-db/ para instalar el composer
    require_once __DIR__ . '/vendor/autoload.php';
    use Laminas\Db\Adapter\Adapter;
    $configArray=[
        'driver'   => 'Mysqli',
        'database' => 'producto3',
        'username' => 'root',
        'password' => '',
    ];
    $adapter = new Adapter($configArray);
    $consulta="SELECT * FROM usuarios";
    $tabla = $adapter->query($consulta, Adapter::QUERY_MODE_EXECUTE);
    
    $tablahtml= '<table border="1">';
    while($renglon = $tabla->current()){
		$tablahtml .= '<tr><td>' . $renglon['email'] . '</td><td>' . 
        $renglon['contrasena'] . '</td></tr>';
		$tabla->next();
	}
    $tablahtml .='</table>';
    echo $tablahtml;
?>