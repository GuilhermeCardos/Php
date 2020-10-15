<div class="titulo">Declarando Tipo Função</div>
<?php
// NUNCA ESQUECA DE CHAMAR, INSTÂNCIAR A FUNÇÃO. 

    function Somar1($a, $b){
        echo "<span> Somando $a + $b = <span>";
        return $a+$b;
    }
    echo Somar1(1, 3) . '<br>';
    echo Somar1(1.7, 3.2) . '<br>';
    //echo Somar1(1, '3dois') . '<br>';
    echo '<hr>';

    function Somar2(int $a, int $b){
        echo "<span> Somando $a + $b = <span>";
        return $a+$b;
    }
    echo Somar2(1, 3) . '<br>';
    echo Somar2(1.7, 3.2) . '<br>';// Como o tipo foi declarado na nova função então ele Arredonda para parte inteira .
    // echo Somar1(1, '3dois') . '<br>';
    echo'<hr>';
   
    function Somar3($a,  $b):int{
        echo "<span> Somando $a + $b = <span>";
        return $a+$b;
    }
    echo Somar2(1, 3) . '<br>';
    echo Somar2(1.7, 3.2) . '<br>';// Como o tipo foi declarado na nova função então ele Arredonda para parte inteira .
    //echo Somar1(1, '3dois') . '<br>';
?>