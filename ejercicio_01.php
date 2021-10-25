<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>OPERACIONES ARITMETICAS</h1>
<h2>FORMULARIO DE CAPTURA</h2>
<br>
<p></p>
<form action="salario_empleado.php" method="get">
    <label>Digite el nombre del empleado: </label>
    <input type="text" name="nombre_empl"><br>
    <label>Ingresa el cargo del empleado: </label>
    <input type="text" name="cargo_empl"><br>
    <label>Ingresa el salario del empleado: </label>
    <input type="number" name="salario"><br>
    <label>Ingresa la bonificacion del 25% que obtuvo: </label>
    <input type="number" name="bonificacion"><br>

    <input type="submit" name="btn_enviar" value="Ingresar">


</form>
</body>
</html>