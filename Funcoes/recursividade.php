<div class="titulo">Recursividade</div>
<?php
        //Todo Recursividade precisará de uma condição de parada e a função chamando ela mesma e diminuindo o problema em pedaço

    function somar($a){
        $resultado=0;
       for(;$a>=1; $a--){
           $resultado+=$a;
        }
        return $resultado;
    }
    echo somar(10).'<br>';

    function somaRecursiva($n1){
        if($n1 == 1){return 1;} //Todo Recursividade precisará de uma condição de parada
        return $n1 * somaRecursiva($n1 -1); // função chamando ela mesma e diminuindo o problema em pedaço
    }
    echo somaRecursiva(4).'<br>';

    function somaRecursivaSimples($n1){ return $n1 === 1 ? 1 : $n1 * somaRecursivaSimples($n1-1);   }

?>