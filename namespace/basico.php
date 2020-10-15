<?php namespace Contexto; 
    // O NAMESPACE PRICISA ESTAR ACIMA DE TODO O CÓDIGO.
?>

<div class="titulo">Exemplo Básico</div>
<?php
    echo __NAMESPACE__.'<br>';

    const CONSTANTE1 = 123;
    define('contexto\CONSTANTE2', 234);
    define(__NAMESPACE__ .'\CONSTANTE3', 345);
    define('outro_contexto\CONSTANTE4', 456);

    //FORMAS DE ACESSO AS CONSTANTE!
    echo CONSTANTE1.'<br>';
    echo CONSTANTE2.'<br>';
   
   
    echo \contexto\CONSTANTE3.'<br>';//subnamespace 'subpastas ou diretorios.
    echo constant(__NAMESPACE__.'\CONSTANTE3').'<br>';

    //echo CONSTANTE4.'<br>';
    echo \outro_contexto\CONSTANTE4.'<br>';

    function soma($a, $b){
        return $a+$b;
    }

    echo \contexto\soma(4,5);
    echo soma(1,2). '<br>';

    function strpos($str, $text){
        echo "Buscando o texto '{$text}' em '{$str}'<br>";
        return 1;
    }

    echo strpos("Texto genérico para busca", 'busca').'<br>';
    echo \strpos("Texto genérico para busca", 'busca').'<br>';


?>