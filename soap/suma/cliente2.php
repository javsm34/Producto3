<?php
 require_once '../../vendor/autoload.php';
 use Laminas\Soap\Client;
if(isset($_POST['btnsumar']) && $_POST['btnsumar']){
	$url = "http://localhost/producto3/soap/suma/servidor.php";
	$ac = array(
		'location' => $url,
		'uri' => "http://localhost/producto3/soap/suma/"
	);
	$cliente = new Client(null, $ac);
	$a=5;
	$b=7;
	$s = $cliente->sumar($_POST['txta'], $_POST['txtb']);
	echo "La suma de " . $_POST['txta'] . " + " . $_POST['txtb'] . " es " . $s;
     //http://localhost/producto3/soap/suma/cliente1.php?a=5&b=3 
     //PARA LOS VALORES DE LA URL
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viernes 01 de Julio</title>
</head>
<body>
    <form action="cliente2.php" method="post">
        Número 1 <input type="text" name="txta">
        Número 2 <input type="text" name="txtb">
        <input type="submit" name="btnsumar">
    </form>
</body>
</html>