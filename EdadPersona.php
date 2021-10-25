<?php

echo "PROGRAMA PARA SABER LA EDAD DE LA PERSONA".'<br />';
echo "________________________________________<br>";

$var_anio = 0;
$var_resultado = 2021 - $var_anio;
if ($var_anio == 0){
    echo "Año no valido".$var_anio;
}elseif($var_resultado >= 18) {
    echo "Es mayor de edad, su edad es: ". $var_resultado;
} else {
    echo "Es menor de edad, su edad es: ". $var_resultado;
}

?>