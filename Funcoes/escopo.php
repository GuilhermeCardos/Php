<div class="titulo">Função - Escopo</div>
<?php
   echo imprimirMensagens();

    function imprimirMensagens(){
        echo "Deus <br>";
    }

    $variavel=1;
    echo "Valor da variavel $variavel <br>";

    function valorVariavel(){
        $variavel=10;
        echo"Valor da variavel dentro da Função $variavel <br>";
    }
    valorVariavel();

    $novaVariavel = 12;
    echo "Valor da  nova variavel $novaVariavel <br>";

    function valorVari(){
        global $novaVariavel; //Referência a Variavel do escopo externo 
        $novaVariavel = 3;
        echo "Valor da  nova variavel $novaVariavel  Dentro da Função<br>";
    }
    valorVari();
    echo "Valor da  nova variavel $novaVariavel depois da função <br>";
   var_dump(valorVari());
?>