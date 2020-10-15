<div class="titulo">Modificador Final</div>
<?php
    /*
        Modificador final(Constante): Classes e Métodos
        Classe 'Final ' NÃO PODE TER HERANÇA
    */ 
    abstract class Abstrata{
        abstract public function Metodo1();
        public final function Metodo2(){
            echo 'Não vou alterar!<br>';
        }
    }
    class Classe extends Abstrata{

        public function Metodo1(){
            echo 'Executando método 1 <br>';
        }

    }
    final class Unica{
        public $valor='Valor unico';
    }


    $classe = new Classe();
    $classe->Metodo1();
    $classe->Metodo2();
    
    $class2 = new Unica();
    echo $class2->valor;

?>