<div class="titulo">Função Anonima</div>
<?php
    $soma =function ($a ,$b){  return $a +$b; };
    echo $soma(1,2).'<br>'; 
    
    function execultar ($a, $b , $op, $funcao){
        $resultado = $funcao($a,$b);
        echo "$a $op $b = $resultado <br>";
    }
    execultar(2,3,'+',$soma);

    $multiplicar = function($a , $b){return $a*$b;};
    execultar(6,2,'*',$multiplicar);

    function dividir($a ,$b){
      //  return $a / $b;
    }
   // execultar(6, 2,'/', dividir);// Forma incorreta 

?>