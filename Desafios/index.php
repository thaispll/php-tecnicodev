<?php 
//Calculadora: Crie um formulário com dois números e operações 
//(+, -, *, /). Use $_POST para calcular e exibir o resultado com if/else ou switch.

//Criar formulário com 2 entradas
// tratar os formulários com base na escolha
// $_POST para calcular e exibir o resultado
    
    //conexão com MySQL Workbench
    $host = "localhost";
    $user = "root";
    $password = "alunolab";
    $database = "sistema_calculadora";

    try {
        //Criar a conexão PDO - PHP Data Objects
        $pdo = new PDO ("mysql:host=$host;dbname=$database; charset=utf8", $user, $password);

        //Configurar PDO
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão: ". $e->getMessage());
    }

    $resultado_f = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operacao = $_POST['operacao'];
    
        //lógica 
        switch ($operacao) {
            case "+": 
                $resultado = $n1 + $n2;
                break;
            case "-": 
                $resultado = $n1 - $n2;
                break;
            case "*": 
                $resultado = $n1 * $n2;
                break;
            case "/": 
                $resultado = ($n2 != 0) ? $n1/ $n2: "Erro! Divisão por zero não existe";
                // $variavel = (condicao) ? valor_se_verdadeira : valor_se_falsa;
                break;
            default:
                $resultado = 0;
        }
        $resultado_f = $resultado;
        
        //INSERIR DADOS NO BANCO DE DADOS
        $sql = "INSERT INTO historico(num1, num2, operacao, resultado)
                VALUES (:n1 , :n2, :op ,:res)";
        $stmt = $pdo ->prepare($sql);
        $stmt->execute([
            ':n1' => $n1,
            ':n2' => $n2,
            ':op' => $operacao,
            ':res' => $resultado_f
        ]);
    }

    //BUSCAR O HISTÓRICO PARA EXIBIR NA TABELA
    $historico = $pdo->query("SELECT * FROM historico ORDER BY data_calculo DESC LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <div class="calc-card">
        <h2>Calculadora</h2>
        <form method="POST"> 
            <input type="number" step="any" name="n1" placeholder="Insira o nº 1" required>

            <select name="operacao">
                <option value="+"> Somar </option>
                <option value="-"> Subtrair </option>
                <option value="*"> Multiplicar </option>
                <option value="/"> Dividir </option>
            </select>
            <input type="number" step="any" name="n2" placeholder="Insira o nº 2" required>
            <button type="submit">Calcular</button>
        </form>
        <?php if ($resultado_f !== ""): ?>
            <div class="resultado">Resultado: <?php echo $resultado_f; ?></div>             
        <?php endif; ?>
    </div>
</body>
</html>