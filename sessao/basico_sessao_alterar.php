<?php
    session_start();
    print_r($_SESSION);

    
?>

<p>
    <b>Nome:</b> <?= $_SESSION['nome']?>
    <br>
    <b>E-mail:</b> <?= $_SESSION['E-mail']?>
</p>

<?php
    $_SESSION['E-mail']= 'gabriel_alterado2@eamil.com.br';
?>

<p>
    <a href= 'basico_sessao.php'>Voltar</a>
</p>