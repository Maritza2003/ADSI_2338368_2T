<?php

echo "PROGRAMA PARA RECIBIR DATOS PERSONALES".'<br />';
echo "________________________________________<br>";

$documento = (string) "10027563489";
$apellidos = "Perez Gomez";
$nombres = "Diana Isabel";
$identidad =  $documento ." ".$nombres ." ".$apellidos;

echo "Sus datos personales son: " ."<br />";
echo 'Nombres: ' .$nombres .' <br />';
echo "Apellidos: $apellidos <br />";
echo "Documento: $documento <br />";

?>
