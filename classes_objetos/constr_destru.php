<div class="titulo">Construtor & Destrutor</div>
<?php
    class Pessoa{
        public $nome;
        public $idade;

        public function __construct($nNome, $nIdade=18){
            echo 'Construtor Invocado. <br>Pessoa: ';
            $this->nome  = $nNome;
            $this->idade = $nIdade;
        }

       public function __destruct(){
            echo 'Excluiu <br>';
        }

        public function Exibir(){
            return "{$this->nome}, {$this->idade}anos.";
        }
    
    }

    // $pessoa = new Pessoa();ERRO. Como foi definido parâmetros no contrutor é obrigatorio passar os valores!

    $nPessoa = new Pessoa ('Rebeca Maria', 40);
    echo $nPessoa -> Exibir() . '<br>';

    echo '<hr>';

    $nPessoa_1 = new Pessoa ('Guilherme Cardoso', 25);
    echo $nPessoa_1 -> Exibir().'<br>';
    
    echo '<hr>';

    $nPessoa_2 = new Pessoa ('Ana Capitolina',25);
    echo $nPessoa_2 -> Exibir().'<br>';
    unset($nPessoa_2); // Chama o método destrutor. 
    
    echo '<hr>';

    $nPessoa_3 = new Pessoa ('Camila Oliveira', 35);
    echo $nPessoa_3 -> Exibir().'<br>';
    $nPessoa_3 = null; // Outra Forma de Chamar O Destrutor 
?>