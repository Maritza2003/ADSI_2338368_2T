<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos del vendedor </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3>Ingrese los siguientes datos: </h3>
    <br>
    <form action="ValorVenta_01.php" method = "get">
        <label>Nombre del vendedor: </label>
        <input type="text" name="text_nombre"><br>
        <label>Cargo del vendedor: </label>
        <input type="text" name="text_cargo"><br>

        <label>Su comision es: </label>
        <input type="number" name="number_comision"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>