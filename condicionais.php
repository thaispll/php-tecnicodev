<?php 
    //$hora = 14;
    $hora = readline("Quantas horas são? \n");
    if($hora < 12){
        echo "Bom dia!";
    } elseif($hora < 18){
        echo "Boa tarde!";
    } else{
        echo "Boa noite!";
    }
    /*$nome = readline("Qual o seu nome?"); */
?>