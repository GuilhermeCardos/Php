<div class="titulo">Herança</div>
<?php

    class Pessoa {
        public $nome;
        public $idade; 

        function __construct($novoNome, $idade){
            $this->nome = $novoNome;
            $this->idade = $idade;
            echo'Pessoa Instânciada!<br>';
        }
        function __destruct(){
            echo'Pessoa Excluído<br>';
        }

        public function status(){
            echo "{$this->nome},{$this->idade}anos.<br>";
        }
    }
 //-----------------------------------------------------------------------------//
    class Usuario extends Pessoa{
        public $login;

        function __construct($nome, $idade, $login){
            //$this->nome = $nome;
            //$this->idade = $idade;
            parent :: __construct($nome, $idade);
            $this->login = $login;
            echo 'Usuário criado<br>';
        }

        function __destruct(){
            echo 'Usuário Excluído!<br>';
        }

        public function status (){
            echo "@{$this->login}: ";
            parent::status();//SobreEscrevendo. 
        }
    }

    $usuario = new Usuario('Gustavo Silva', 21, 'gust_mend');
    $usuario->status();
    unset($usuario);

?>