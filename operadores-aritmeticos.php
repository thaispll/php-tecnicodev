<?php 
    $valor_prato = 25.00;
    $quantidade = 2;
    $taxa_servico = 0.10;

    $subtotal = $valor_prato * $quantidade; //multiplicação
    $total = $subtotal + ($subtotal *$taxa_servico);

    echo "O total da conta é: R$" .$total;
?>