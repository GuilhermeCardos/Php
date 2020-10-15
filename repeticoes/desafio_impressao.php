<div class="titulo">Desafio de Impressão </div>
<?php
    $vetor=['AAA','BBB','CCC','DDD','EEE','FFF'];
    //echo count($vetor);
    
    for($cont=0; $cont<=5; $cont++ ){
        if($cont%2===0){echo "{$vetor[$cont]} <br>";}
    }
    echo'<hr>';
    foreach($vetor as $indice => $valor)
    {
        if($indice % 2 === 0 ){echo "$valor <br>";}
    }
?>