<?php
if (isset($_POST["nombre"])&& isset($_POST["apellido1"])&& isset($_POST["apellido2"])&& isset($_POST["login"])&& isset($_POST["password"])&& isset($_POST["confirmacion"])) {
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $confirmacion = $_POST["confirmacion"];
    echo "<p>Usuario creado correctamente</p>";
}else{
    header('location:registro.php');
    if (empty($_POST["nombre"])or empty($_POST["apellido1"])or empty($_POST["apellido2"])or empty($_POST["login"])or empty($_POST["password"])or empty($_POST["confirmacion"]))
    echo "<p>Faltan datos</p>";
    else{

    }
};
$datos=$_POST[""];

?>