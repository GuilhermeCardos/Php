<div class="titulo">Desafio Palindromo</div>
<?php
    $nome="luiz";

    function Palindromo($palavra){
        $pala = strtolower($palavra); 
        $indice= strlen($pala) -1;
        for($i=0; $i<=$indice; $i++){
            if($pala[$i]!== $pala[$indice - $i]){
                return 'Não <br>';
            }
        }
        return 'Sim <br>';
    }

    
    function PalindromoSimples($palavra){
        return $palavra === strrev($palavra) ? 'Sim<br>': 'Não<br>';
    }

    //---------------------------------------------------------
    echo 'Função Palindromo<br>';

    echo Palindromo('ArArA');
    echo Palindromo('Bola');
    echo Palindromo($nome);
    echo '<hr>';
    //-----------------------------------------------------------------
    echo 'Função PalindromoSimples<br>';

    echo PalindromoSimples('ArArA');
    echo PalindromoSimples('Bola');
    echo PalindromoSimples($nome);
    


    
    
?>