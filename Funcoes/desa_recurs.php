<div class="titulo">Desafio Recursividade</div>
<?php
    $array = [
        1,2,
        [3,4,5], 
        6,
        [7,
            [8,9]
        ]];

    function ExibirNumero($vetor, $nivel = '>'){
        foreach ($vetor as $elemento){
            if(is_array($elemento)){
                ExibirNumero($elemento, $nivel . $nivel[0]);
            }else{
                echo "$nivel $elemento <br>";
            }
        }        
    }

    ExibirNumero($array);
?>