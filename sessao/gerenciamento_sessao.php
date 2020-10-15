<div class="titulo">Gerenciando Sessão</div>
<?php
   //session_id('s2ga5hq0hd117btle0c7eggcha'); 
    session_start();
    
    echo session_id(); //s2ga5hq0hd117btle0c7eggcha

    $contador =&$_SESSION['contador'];

    $contador = $contador ? $contador + 1 : 1;

    echo '<br>'. $_SESSION ['contador'];


    if($_SESSION['contador']% 5 === 0){
        session_regenerate_id(); // gera um novo id para página.
    }

    if($_SESSION['contador']>=10){
        session_destroy(); // zera a sessão 
    }
?>