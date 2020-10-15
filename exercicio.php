<?php
    session_start();
    
    if($_COOKIE['usuario'])
    { $_SESSION ['usurio'] = $_COOKIE['usuario']; }

    if(!$_SESSION['usuario']){
        header('Location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="shortcut icon" href="imagens/php.png">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?> </span>
        <a href='logout.php'class="vermelho"> Sair</a>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>  class="verde">Sem formatação</a>
        <a href="index.php" class="azul">Voltar</a>
        
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
    GU1LH3RM3 & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>