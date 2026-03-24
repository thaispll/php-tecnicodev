<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>
    <?php
    /* REQUISIÇÕES
    POST: publicação
    GET: solicitar dados
    PUT:  atualizar um recurso inteiro
    PATCH: atualizações parciais
    DELETE: excluir registro*/
    if ($_POST){
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $msg = htmlspecialchars($_POST['msg']);

        //salvar em arquivo
        $dados = "$nome | $email | $msg\n";
        file_put_contents('mensagens.txt', $dados, FILE_APPEND);
        echo "<p style='color: green';> Mensagem enviada com sucesso por $nome! </p>"; 
    }
    ?>

    <form method="POST">
        <label> Nome: <input type="text" name="nome" required></label><br><br>
        <label> E-mail: <input type="email" name="email" required></label><br><br>
        <label> Mensagem: <textarea type="text" name="msg" required></textarea><br><br>
        <button type="submit">Enviar</button>
    </form>
    <h2>Mensagens Recebidas</h2>
    <?php 
        if (file_exists('mensagens.txt')){
            $linhas = file('mensagens.txt');
            foreach ($linhas as $linhas) {
                echo "<p>$linha </p>";
            }
        } else {
            echo "<p> Nenhuma mensagem encontrada </p>";
        }
    ?>
</body>
</html>