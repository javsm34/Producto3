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
    
   $cadjson = '';
    while($renglon = $tabla->current()){
		$cadjson .= '{"email" :"' . $renglon['email'] . '","contrasena":"' . 
        $renglon['contrasena'] . '"}';
		$tabla->next();
	}
    echo $cadjson;
    //FALTA ELIMINAR LA ULTIMA COMA ,
/*{
    "email":"javnol@gmail.com",
    "contrasena":"f10b80f6345f259cd2613e2114ea5e14"
},
{
    "email":"juanp@gmail.com",
    "contrasena":"f6399321748a21b7c758b252a77bef78"
}*/
?>