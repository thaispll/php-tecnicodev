<?php 
    $idade_cliente = 17;
    $tem_acompanhante = true;

    if ($idade_cliente >= 18 || $tem_acompanhante === true){
        echo "Entrada permitida no evento";
    } else {
        echo "Entrada negada.";
    }
?>