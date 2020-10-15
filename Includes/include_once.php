<div class="titulo">Include Once</div>
<?php
    /*
        include once ou require once: 

        Só chama o arquivo apenas uma vez....
    */

    include('include_once_arquivo.php') ;

    echo "Variável = {$variavel}. <br>";
    $variavel = "Variavel Alterada";
    echo "Variável = {$variavel}. <br>";
     
    echo"<br>";

    include('include_once_arquivo.php');
    echo"Variavel = {$variavel}<br>";
    $variavel = "Variavel Alterada";
    echo "Variável = {$variavel}. <br>";
    
    include_once('include_once_arquivo.php');
    echo "Variável = {$variavel}. <br>";
    
    require_once('include_once_arquivo.php');
    echo "Variável = {$variavel}. <br>";

?>