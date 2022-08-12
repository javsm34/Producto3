<?php
if (isset($_POST['txtpass']) && $_POST['btnGenerar']) {
    echo hash_hmac('md5', $_POST['txtpass'], 'ma2022', false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="genpass.php" method="post">
    <hr/>
    Clave: <input type="text" 
                  name="txtpass"
                  value="<?php if (isset($_POST['txtpass']) ) echo $_POST['txtpass']; ?>">
    <br/><br/>
    <input type="submit" name="btnGenerar" value="Generar">
    </form>
</body>

</html>