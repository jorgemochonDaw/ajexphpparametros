<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenido</h1>
    <form action="index.php" method="POST" id="form" enctype="multipart/form-data">
        <label for="fecha">Fecha de nacimiento</label>
        <input type="date" name="fecha" id="fecha"><br>
        <label for="postal">Código postal</label>
        <input type="number" name="postal" id="postal"><br>
        <label for="numero">Número de telef</label>
        <input type="number" name="numero" id="numero"><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <p id="r"></p>
</body>
<script src="./jquery.js"></script>
<script src="./ajax.js"></script>

</html>