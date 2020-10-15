<?php
    require_once('pessoa.php');

    class Usuario extends Pessoa
    {
        public $login;

        function __construct($nome, $idade, $login)
        {
            //$this->nome = $nome;
            //$this->idade = $idade;
            parent :: __construct($nome, $idade);
            $this->login = $login;
            echo 'Usuário criado<br>';
        }

        function __destruct()
        {
            echo 'Usuário Excluído!<br>';
        }

        public function status ()
        {
            echo "@{$this->login}: ";
            parent::status();//SobreEscrevendo. 
        }

     
    }

?>