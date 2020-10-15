<div class="titulo">Foreach</div>
<?php
    $array = [1000=>'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
    
    foreach($array as $valor)   
    {echo "$valor <br>";  }
     
    foreach($array as $indice => $valor)
    { echo "$indice => $valor <br>";}
    

    $array1 = [ ['a','e','i','u'], ['b','c','d','f']  ];
    
    foreach($array1 as $linha)
    {
        foreach($linha as $valor)
        {
            echo " $valor ";
        }
        echo "<br>";
    }
    
    $numeros=[1,2,3,4,5];
    print_r($numeros);
    
    echo'<br>';
    
    foreach($numeros as &$valor) // &$valor está referenciando o valores. Com isso ele muda os valores da array.
    {
        $valor*=2;
        echo"$valor ";
    }
    
    echo'<br>';
    print_r($numeros);
?>