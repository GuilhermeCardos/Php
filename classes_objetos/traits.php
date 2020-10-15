<div class="titulo">Traits #01 </div>
<?php
    /*
        Reuso de codigo por composição
        Não usa-se Extends e nem Implements com o Traits. Usa-se ' use ' dentro da classe.
    */

    trait Validacao {
        public $a ='valor A';
        public function validarString($str){
            return isset($str) && $str !==''; 
        }
    }

    trait ValidacaoMelhor{
        public $B ='valor B';
        private $C ='valor C';
        public function ValidarStringMelhor($str){
            return isset($str) && trim($str);   // Função ' trim() ' retira os espaços embranco da string
        }
    }

    class Usuario{
        use Validacao, ValidacaoMelhor;
        public function imprimirValorC(){   echo '<br>', $this->C, " (Privado)";  }
    }

    $usuario = new Usuario();
    var_dump($usuario->validarString(' ')); echo'<br>';
    var_dump($usuario->ValidarStringMelhor(' ')); echo'<br>';
    echo $usuario->a, '<br>', $usuario->B;
    $usuario->imprimirValorC();


?>