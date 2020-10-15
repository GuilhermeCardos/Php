<div class="titulo">Closure Callable</div>
<?php
    //Callable é qualquer função que pode ser chamada e ela ira fazer o seu papel. IS_CALLABLE
    //Closure 

    $soma1=function($a, $b){  return $a+$b;  }; //Função Anonima: Variavel recebe uma função.
    echo $soma1 (2,3).' ';
    echo (is_callable($soma1) ? ': Sim': ': Nao').' ';
    //------------------------------------------------------------
    echo '<br>';
    $soma=2;
    echo (is_callable($soma) ? 'Sim': 'Não').' <br>';
    //--------------------------------------------------------------
    
    function Soma2($a , $b){  return $a+$b;  }
    echo Soma2(2,3).'<br>';
   echo (is_callable("Soma2") ? 'Sim': 'Nao').'<br>'; //Erro Função sem parâmetros
    var_dump($soma1);



    function executar1($a, $b, $op, Callable $funcao){
        $resultado = $funcao($a,$b);
        echo "$a $op $b = $resultado <br>";
    }
    echo '<br>';
    executar1(2, 3, '+', $soma1); // As duas funções é considerada um callable
    executar1(2,3,'+',"Soma2"); // Para colocar uma função dentro da outra 
    

    function executar2($a, $b, $op, Closure $funcao){
        $resultado = $funcao($a,$b);
        echo "$a $op $b = $resultado <br>";
    }
    echo '<br>';
    executar1(200, 300, '+', $soma1); // A função closure só considera a função Anonima 
    executar1(250,3,'+',"Soma2"); 

?>