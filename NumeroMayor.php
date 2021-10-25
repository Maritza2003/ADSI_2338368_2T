<?php
echo "PROGRAMA QUE HALLE EL NUMERO MAYOR DE 3 NUMEROS DIGITADOS <br>";
echo "-----------------------------------------------------------------------------------------------------------".'<br>';
#entrada de variables
$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$numero3 = $_REQUEST["numero3"];

#procedimiento
if($numero1 > $numero2){
    if($numero1 > $numero3){
        echo 'El numero = '. $numero1. ' es mayor'."<p>";
    }else{
        echo 'El numero = '. $numero3. ' es mayor'."<p>";
    }

}else{
    if($numero2 > $numero3){
        echo 'El numero = '. $numero2. ' es mayor'."<p>";
    }else{
        echo 'El numero = '. $numero3. ' es mayor'."<p>";
    }
}"<p>";

echo '<a href="http://localhost/ADSI_2338368/FormularioNumeroMayor.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'

?>