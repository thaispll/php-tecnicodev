<?php 
    $mesAtual = isset($_GET['mes']) ? (int)$_GET['mes'] : (int)date('m');
    $anoAtual = isset($_GET['ano']) ? (int)$_GET['ano'] : (int)date('Y');

    // Ajuste para datas inválidas 
    $dataAtual = strtotime("{$anoAtual}-{$mesAtual}-01"); 
    
    // Configura os meses anteriores e próximos para os links
    $mesAnt = date('m', strtotime('-1 month', $dataAtual));
    $anoAnt = date('Y', strtotime('-1 month', $dataAtual));
    $mesProx = date('m', strtotime('+1 month', $dataAtual));
    $anoProx = date('Y', strtotime('+1 month', $dataAtual));

    // Dados do calendário
    $primeiroDiaSemana = (int)date('w', $dataAtual); // 0 (dom) a 6 (sab)
    $totalDiasMes = (int)date('t', $dataAtual);
    
    // Dados de hoje para o destaque "hoje"
    $hojeDia = (int)date('j');
    $hojeMes = (int)date('m');
    $hojeAno = (int)date('Y');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calendário PHP</title>
</head>
<body>
    <h2>Calendário: <?php echo date('F Y', $dataAtual); ?></h2>
    
    <div class="nav">
        <a href="?mes=<?php echo $mesAnt; ?>&ano=<?php echo $anoAnt; ?>">&lt;- Anterior</a> | 
        <a href="?mes=<?php echo $mesProx; ?>&ano=<?php echo $anoProx; ?>">Próximo -&gt;</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Dom</th><th>Seg</th><th>Ter</th><th>Qua</th><th>Qui</th><th>Sex</th><th>Sáb</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                $diaVar = 1;
                //  Preenche espaços vazios até o primeiro dia da semana
                for ($i = 0; $i < $primeiroDiaSemana; $i++) {
                    echo "<td></td>";
                }

                //Preenche os dias do mês
                for ($i = $primeiroDiaSemana; $diaVar <= $totalDiasMes; $i++) {
                    // Se for domingo (múltiplo de 7) e não for o primeiro dia, fecha a linha e abre outra
                    if ($i > 0 && $i % 7 == 0) {
                        echo "</tr><tr>";
                    }

                    $classe = '';
                    if ($diaVar == $hojeDia && $mesAtual == $hojeMes && $anoAtual == $hojeAno) {
                        $classe = 'hoje';
                    }
                    
                    // Verifica se é fim de semana (Coluna 0 ou 6)
                    $estiloFDS = ($i % 7 == 0 || $i % 7 == 6) ? 'fim-semana' : '';

                    echo "<td class='$classe $estiloFDS'>$diaVar</td>";
                    
                    $diaVar++;
                }

                // Preenche o restante da última semana com células vazias
                while ($i % 7 != 0) {
                    echo "<td></td>";
                    $i++;
                }
            ?>
            </tr>
        </tbody>
    </table>
</body>
</html>