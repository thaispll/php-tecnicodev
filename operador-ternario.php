<?php 
$estoque = 5;

// condição ? verdadeiro : falso
$status = ($estoque >0) ? "Disponível": "Indisponível";
echo "O item está: ". $status;