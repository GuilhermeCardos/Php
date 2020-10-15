<div class="titulo">Traits #02</div>
<?php
    trait Validacao {
        public function ValidarString($str){
            return isset($str) && $str !=='';
        } 
    }
    trait ValidacaoMelhor{
        public function ValidarString ($str){
            return isset($str) && trim($str);
        }
    }
    /*
      Tratando os erros do Trait. 
      Caso a classe tenha dois metods com o mesmo nome é necessario especificar o método.  
    */

    class Usuario{
        use Validacao, ValidacaoMelhor{
            ValidacaoMelhor::ValidarString insteadOf Validacao; // instedOf -> "Em vez de "
            //Validacao::ValidarString insteadOf ValidacaoMelhor;
            Validacao :: ValidarString as ValidacaoSimples; // trocando nome do método;
        }
    }
    $usuario = new Usuario();
    var_dump ($usuario->ValidarString(' '));echo'<br>';
    var_dump($usuario->ValidacaoSimples(' '));
?>