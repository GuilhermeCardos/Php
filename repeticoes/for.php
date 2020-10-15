<div class="titulo">Laço de repetição FOR</div>
<?php
    for($contador = 1; $contador<=5; $contador++){
        echo "$contador <br>";
    }
        echo '<hr>';
    for(; $contador<=10; $contador++){
        echo "$contador <br>";
    }
    echo '<hr>';
    for(; $contador<=15 ;){
        echo "$contador <br>";
        $contador++;
    }
    echo '<hr>';

    $array = ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
    Print_r($array);
    echo'<br>';
    
    for( $i=0; $i < count($array); $i++)
    {
        echo "{$array[$i]},";
    }
    echo '<hr>';
    
    //MATRIX
    $matrix=[
        ['a','e','i','o','u'],
        ['b','c','d']
    ];

    for($i=0; $i < count($matrix); $i++)
    {
        echo '<br>';
        for($j=0; $j < count($matrix[$i]); $j++)
        {
            echo "{$matrix[$i][$j]}-";
        }
    }

?>