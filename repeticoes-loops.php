<?php
    $tarefas = ["Estudar PHP", "Beber água", "Treinar lógica"];

    echo "Sua lista de hoje:\n";

    foreach ($tarefas as $indice => $item) {
        echo ($indice +1). " - $item". PHP_EOL;
    }
?>