<div class="titulo">Argumentos e Retorno </div>
<?php


    function obterMensagens(){
        return 'Seja Bem-vindos!';// Usando o return. |Tem que usar o Echo ou print para mostrar na tela 
    }

    
    $mensagem= obterMensagens();
    echo $mensagem;
    echo '<br>'. obterMensagens();
    echo '<br>';
    var_dump(obterMensagens());
    
    //-----------Parâmentro---------------

    function obterMensagensComNome($nome){
        return "<br>Seja Bem-vindo {$nome}!";
    }
    $qualquercoisa="Guilherme";

    $mostrar=obterMensagensComNome($qualquercoisa);
    echo $mostrar;

    echo '<hr>';

    //------------------Função Com Soma ------------------------------

    $x=5; $y=8;
    function soma($a,$b){
        return $a+$b;
    }

    echo '<br>', soma(4,5);
    echo '<br>', soma($x,$y); 

    // --------------------------------Passagens por Parâmetro ou por valor -------------------------------------

    $variavel=1;

    function trocaValor($a, $novoValor){
        $a = $novoValor;
    }

    trocaValor($variavel, 3); // Sem usar o return 

    echo '<br>', $variavel; 

    function trocaValorDeVerdade(&$a, $novoValor){
        $a = $novoValor;
    }
    trocaValorDeVerdade($variavel, 5000); // ALTEROU SEM USAR O RETURN  PORCAUSA DA REFERÊNCIA !!!!!!
    echo '<br> Por Referencia & ', $variavel;

?>