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
    $renglon = $tabla->current();
    var_dump($renglon);//sirve para imprimir arreglos
    $tabla->next();//se le dice que avance al siguiente renglon
    echo"<hr/>";
    var_dump($renglon);
?>