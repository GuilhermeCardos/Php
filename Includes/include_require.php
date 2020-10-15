<div class="titulo">Include Vs Require</div>
<?php

    /*
        Include-> inclui a página, caso ela não exista ou houver algum erro, a Página ira inicializar normal e com os erros amostra os Warning 


        Require-> Inclui a página no mesmo estilo que o inclue, a diferença e que caso a página que está sendo requerida sofra alguma problema A pagina que está em visão não ira carregar nada e vai aparecer erros Faltais
    
    */





    echo 'Usando um include com arquivo inexistente ....<br>';
    //ini_set('display_errors');
   include('arquivo_inexistente.php');

    
    //echo 'Usando um require com arquivo inexistente ....<br>';
    //require('arquivo_inexistente');


    echo 'Usando....<br>';

?>