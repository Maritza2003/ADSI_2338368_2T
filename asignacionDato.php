<?php

$dato = ' ';
if ($dato == "A" or $dato == "B" or $dato == "C"){

    if ($dato == "A" or $dato == "a" ) {
        echo "Pago con tarjeta de credito: ". $dato;
    }
    if($dato == "B" or $dato == "b") {
        echo "Pago con bono o cupon: ". $dato;
    }
    if($dato =="C" or $dato == "c") {
        echo "Pago de contado";
    }
}else {
    echo "Digite una letra valida". $dato;
}

?>