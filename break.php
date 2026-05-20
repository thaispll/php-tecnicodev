<?php
    $statusPedido = "entregue";
    switch ($statusPedido) {
        case "preparando":
            echo "O Jacquin está na cozinha";
            break; //sai do switch aqui
        case "entregue":
            echo "O garçom desligou o freezer!";
            break;
        default:
            echo "Vergonha de la proficion";
            break;
        }

?>