<?php
    require_once('login/config_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/php.png">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem-Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Login</h3>
            <?php if(isset ($_SESSION['erros'])): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p> <?= $erro ?> </p>
                    <?php endforeach?>
                </div>
            <?php endif?>
            <form action="#" method="post">
                <div>
                    <label for ="email">E-mail:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for= senha> Senha:</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        GU1LH3RM3 & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>