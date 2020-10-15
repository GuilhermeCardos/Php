<Div class="titulo">Classe Abstrata</Div>
<?php
    /* 
        Classe abstrata não pode ser instânciada. 
        A classe abstrata é composta por métodos abastratos e concretos.
    */
    
    abstract class Abstrata{
        public abstract function Metodo1();
        protected abstract function Metodo2($parametro);
    }

    abstract class FilhaAbstrata extends Abstrata{
        public function Metodo1(){
            echo "Executando metodo 1 <br>";
        }

        public abstract function Metodo3();
    }

    /*
        Apartir do momento em que a class CONCRETA extender a class abstrata 
        ela é obrigada desenvolver os metodos pré-definidos
    */

    class Concreta extends FilhaAbstrata {
        public function Metodo1(){
            parent::Metodo1();
            return "Executando o metodo 1 extendido";
        }
        protected function Metodo2($parametro){
            echo "Executando o metodo 2, com o parametro $parametro <br>";
        }
        public function Metodo3(){
            echo "Executando o metodo 3 <br>";
            $this->Metodo2('interno');
        }
    }


    $c1 = new Concreta ();
    echo $c1->Metodo1(), '<br>';
   // $c1->Metodo2('externo');
    $c1->Metodo3();

    echo '<br>';

    var_dump($c1); echo '<br>';
    var_dump($c1 instanceof Concreta); echo '<br>';
    var_dump($c1 instanceof FilhaAbstrata); echo '<br>';
    var_dump($c1 instanceof Abstrata); echo '<br>';
?>