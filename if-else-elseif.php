<?php 
    $idade= 17;
    if ($idade >= 18){
        echo "Pode entrar no evento";
    } elseif ($idade == 17){
        echo "Entrada permitida apenas com autorização";
    } else {
        echo "Entrada proibida.";
    }
?>