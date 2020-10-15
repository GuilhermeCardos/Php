<div class="titulo">Sessão</div>
<?php

    session_start();//sempre inicia-se primeiro o session start; $_SESSION é um tipo de array.

    print_r($_SESSION);
    echo '<br>';

    if(! $_SESSION ['nome']){
        $_SESSION['nome']='Gabriel';
    }

    if(!$_SESSION ['E-mail']){
        $_SESSION['E-mail']='gabriel@azmail.com';
    }

    print_r($_SESSION);
?>

<p> 
    <a href="/pastaweb/curso-php/sessao/basico_sessao_alterar.php"> Alterar Sessão</a>
</p>

<p> 
    <a href="/pastaweb/curso-php/sessao/basico_sessao_limpar.php"> Limpar a Sessão</a>
</p>