<?php namespace Outro\Nome ?>
<div class="titulo">USE & AS</div>
<?php
    echo __NAMESPACE__.'<br>';

    include('use_as_arquivo.php');

    function Soma ($a, $b){ return $a.$b;}   //Concatenação

    class Classe {
        public $var;
        
        function Func(){
            echo __NAMESPACE__.'->'.__CLASS__.'->'.__METHOD__.'<br>';
        }

    }
    
    echo \Nome\Bem\Grande\CONSTANTE.'<br>';
    use const \Nome\Bem\Grande\CONSTANTE; // 'Use' associado a uma constante
    echo CONSTANTE.'<br>';

    use Nome\Bem\Grande as contexto; // 'Use' associando um valor a uma 'variável'

    echo Soma(1,2).'<br>'; //Acessando a função da prorpia classe atual.

    echo contexto\Soma(1,2).'<br>';

    use function Nome\Bem\Grande\Soma as SomaReal;

    echo SomaReal(1,2).'<br>';

    $a = new Classe();
    $a->Func();

    $b= new \Nome\Bem\Grande\Classe();
    $b->Func();

    $c= new contexto\Classe();
    $c->Func();

    use \Nome\Bem\Grande\Classe as D;
    $d= new D();
    $d->Func();
?>