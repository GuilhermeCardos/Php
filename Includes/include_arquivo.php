<?php
    echo 'Carregando: include_arquivo<br>';

    $variavel = 'Estou definida';


    if(!function_exists('soma')){ // A função é usada para evitar o erro de ser chamado duas vez 
        function soma($a, $b){
            return $a + $b;
        }
    }
    
?>