<div class="titulo">Error Handler</div>
<?php
    ini_set('display_errors', 1);
   // echo 4/0 .'<br>';

    // Para definir o nivel de criticidade dos erros
    // Apenas Erros serão exibidos. Excluindo Advertências 
    error_reporting(E_ERROR);
    echo 4/0 . '<br>';

    error_reporting(E_ALL);//Exibe Erros e Advertências
    echo 4 / 0 .'<br>';

    error_reporting(~E_ALL);//~ Simbolo de negação
    echo 4 / 0 .'<br>';


    echo '<hr>';
    
    error_reporting(E_ALL);
    echo 4 / 0 . '<br>';
    include 'arquivoinexistente.php';

    function filtrarMensagem($errno, $errstring)
    {
        $txt = 'include';
        //$txt = 'by zero';
        return !!stripos(" $errstring", $txt);
    }

    set_error_handler('filtrarMensagem', E_WARNING);


    echo '<hr>';
    echo 4 / 0 . '<br>';
    include 'arquivoinexistente.php';

    echo '<hr>';
    restore_error_handler();


    echo 4 / 0 . '<br>';
    include 'arquivoinexistente.php';

?>