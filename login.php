<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($mysql->select_db("mensajeria")){
    $consultausuariopass="SELECT login,password FROM mensajeria;";
    $resultadousuariopass=$mysql->query("consultausuariopass");
    $comprobacionusuariopass=$resultadousuariopass->fetch_assoc();

    if ($usuario=$comprobacionusuariopass["login"] and $password=$comprobacionusuariopass["password"]){
        echo "<h1>Bienvenido a tu muro de mensajeria @$usuario</h1>";
    }else{
        //error2
        header("location:iniciosesion.php");
        echo "<p>Usuario incorrecto</p>";
    }
}else{
    //error3
    if ($mysql->connect_errno){
        header("location:iniciosesion.php");
        echo "<p>No se pudo conectar a la base de datos, por favor espere o recargue la pagina.</p>";
    }
}
?>
</body>
</html>