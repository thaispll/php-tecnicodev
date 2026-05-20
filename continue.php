<?php 
for ($i = 1; $i <=5; $i++) {
    if ($i == 3) {
        continue; //pula o 3 
    }
    echo "Processando pedido #$i";
}
?>