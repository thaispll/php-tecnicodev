<?php 
    $pedido = "entregue";
    switch ($pedido) {
        case "pendente":
            echo "Aguardando cozinha.";
            break;
        case "preparando":
            echo "O chef está trabalhando";
            break;
        case "entregue":
            echo "Bom apetite";
            break;
        default:
            echo "status desconhecido";
    }
?>