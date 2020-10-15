<div class="titulo">Argumento Padrão</div>
<?php
    function SaudacaoPadrao($nome='Senhor(a)', $sobrenome='Cliente'){
        return "Bem-vindo $nome $sobrenome!<br>";
    }

    echo SaudacaoPadrao();
    echo SaudacaoPadrao(null);
    echo SaudacaoPadrao(null,NULL);
    echo SaudacaoPadrao("Mestre", "Supremo");

    function AnotarPedido($comida, $bebida='Agua'){
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    AnotarPedido('Hamburguer');
    AnotarPedido('Pizza', 'Refrigerante');
    AnotarPedido( null,'Agua');

    function AnotarPedido2($bebida='Agua', $comida){
        echo "Para comer: $comida<br>";
        echo "Para beber: $bebida<br>";
    }
    //AnotarPedido2('Hamburguer'); Dá erro porque no 1º parâmetro a variavel já tem um valor padrão. É priciso respeitar a Ordem
    AnotarPedido2('Suco ', 'Coxinha');
?>
