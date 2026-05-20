<?php 

//PHP 8, É EXPRESSÃO (RETORNA UM VALOR)
$nota = 10;
$resultado = match($nota) {
    10, 9   => "Excelente",
    8, 7    => "Bom trabalho.",
    6       => "Pode melhorar.",
    default =>  "Reprovado."
};

echo $resultado;

?>