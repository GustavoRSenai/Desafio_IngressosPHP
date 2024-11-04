<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Compre seu ingresso</title>
</head>
<body>
    <main class="formulario">
        <h1> Formulário de Ingresso:</h1>
        <form method="POST">
            <p>Nome:</p>
            <input type="text" name="nome" placeholder="Digite seu nome">
            <p>Idade:</p>
            <input type="number" name="idade" placeholder="Digite sua idade">
            <p>Escolha o tipo do ingresso:</p>
            <select id="opcoes" name="ingresso">
                <option value="1">VIP</option>
                <option value="2">Regular</option>
                <option value="3">Básico</option>
            </select>
            <button type="submit"> Enviar </button>
        </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $idade = $_POST['idade'];
    $nome = $_POST['nome'];
    $ingresso = $_POST['ingresso'];


    if ($idade < 18){
        echo "<p>Venda de Ingressos não permitida para menores de 18!!!</p>";
    } else {
        switch($ingresso){
            case 1:
                $preco = 100;
                break;
            case 2:
                $preco = 50;
                break;
            case 3:
                $preco = 20;
                break;
            default:
                exit;
        }
        echo "<p>Bem-vindo, $nome</p>";
        echo "<p>Preço: R$" . number_format($preco, 2,",");
    }

    }
    ?>
    </main>
</body>
</html>