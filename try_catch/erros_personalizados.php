<div class="titulo">Erros personalizados</div>
<?php
    class FaixaEtariaException extends Exception{
        public function __contruct($message, $code=0, $previous=null){
            echo "Erro Personalizado: $message<br>";
            parent::__construct($mesage, $code, $previous);
        }

    }
    
    function calcularTempoAposentadoria($idade){
        if($idade <18){
            throw new FaixaEtariaException('Ainda está muito longe!');
        }
        if($idade > 70){
            throw new FaixaEtariaException('Já deveria está aposentado!');
        }

        return 70 - $idade;
    }
    $idadesAvaliadas=[15,30,60,80];

    foreach($idadesAvaliadas as $idade) {
        try{
            $tempoRestante = calcularTempoAposentadoria($idade);
            echo "Idade: $idade, $tempoRestante anos restantes<br>";
            
        }catch (FaixaEtariaException $e){
            echo "Não foi possivel calcular para $idade anos.<br>";
            echo "Motivo: {$e->getMessage()}<br>";
        }
    }

    echo 'Fim!';
?>