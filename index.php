<?php 
    session_start();
    
    if($_COOKIE['usuario'])
    { $_SESSION ['usurio'] = $_COOKIE['usuario']; }
    
    if(!$_SESSION['usuario'])
    { header('Location: login.php');  }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link rel="shortcut icon" href="imagens/php.png">
        <link rel="stylesheet" href="recursos/css/estilo.css">
        <title>Curso PHP</title>
    </head>
    <body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        <nav class="navegacao">
            <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?> </span>
            <a id='sair' href='logout.php'> Sair</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php require('menu.php');?>
            </div>
        </main>
        <footer class="rodape">
            GU1LH3RM3 & ALUNOS © <?= date('Y'); ?>
        </footer>
    </body>
</html>