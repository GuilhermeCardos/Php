<?php
  class Pessoa 
  {
        public $nome;
        public $idade; 

        function __construct($novoNome, $idade)
        {
            $this->nome = $novoNome;
            $this->idade = $idade;
            echo'Pessoa Instânciada!<br>';
        }
        function __destruct()
        {
            echo'Pessoa Excluído<br>';
        }

        public function status()
        {
            echo "{$this->nome},{$this->idade}anos.<br>";
        }
    }

?>