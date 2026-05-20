<?php

    //Uma receita para calcular o desconto do cardápio
    function calcularDesconto (float $valorTotal, float $porcentagem): float {
        $desconto = $valorTotal * ($porcentagem/ 100);
        return $valorTotal - $desconto;
    }
    $conta = 150.00;
    echo "Valor com desconto: R$". calcularDesconto($conta, 10);