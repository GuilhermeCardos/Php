<div class="titulo">Desafio Include</div>
<?php
   require_once('usuario.php');

    $usuario = new Usuario('Gustavo Silva', 21, 'gust_mend');
    $usuario->status();
    //unset($usuario);
?>