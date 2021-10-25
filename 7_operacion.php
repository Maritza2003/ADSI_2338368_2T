<?php
echo "OPERACIONES BASICAS".'<br>';
echo "-----------------------".'<br>';

//Entrada de variables
$numero1 = $_REQUEST["num_numero1"];
$numero2 = $_GET["num_numero2"];

$respuesta = $numero1 + $numero2;
echo "La suma de los numeros: ".$numero1." y ". $numero2. " es: ".$respuesta.'<br>';

$respuesta1 = $numero1 - $numero2;
echo "La resta de los numeros: ".$numero1." y ". $numero2. " es: ".$respuesta1.'<br>';

$respuesta2 = $numero1 * $numero2;
echo "La miltiplicación de los numeros: ".$numero1." y ". $numero2. " es: ".$respuesta2.'<br>';

$respuesta3 = $numero1 / $numero2;
echo "La división de los numeros: ".$numero1." y ". $numero2. " es: ".$respuesta3.'<br>';

echo '<a href= "http://localhost/ADSI_2338368/06_formulario.php"><input type="submit" name="btn_enviar" value="Regresar"></a'


?>
