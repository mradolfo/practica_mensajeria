<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        div{
            text-align: center;
        }
        input{
            margin: 4px;
        }
        label{
            text-align: justify;
        }
    </style>
</head>
<body>
<h1>Creación Usuario</h1>
<div>
    <form action="registro1.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre">
            <br>
            <label for="apellido1">Primer apellido:</label>
            <input type="text" id="apellido1">
            <br>
            <label for="apellido2">Segundo apellido:</label>
            <input type="text" id="apellido2">
            <br>
            <label for="login">Login:</label>
            <input type="text" id="login">
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password">
            <br>
            <label for="confirmacion">Confirmar contraseña:</label>
            <input type="password" id="confirmacion" />
    </form>
    <button>Enviar</button>
</div>
</body>
</html>