<div class="titulo">Primeira Classe</div>
<?php
    class Cliente{
        // Atributos
        public $nome = 'Anônimo';
        public $idade = 18;

        public function Apresentar()
        {
            return "Nome: {$this->nome}. Idade: {$this->idade}";
        }
    }

    $cliente_1 = new Cliente();
    $cliente_1 ->nome='Luiz Guilherme';
    $cliente_1 ->idade=25;
    echo $cliente_1 ->Apresentar() . '<br>';


    $cliente_2 = new Cliente();
    $cliente_2 ->nome ='Ana Silva';
    $cliente_2 ->idade ='24';
    echo $cliente_2 -> Apresentar();
?>