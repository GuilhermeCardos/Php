<div class="titulo">Desafio</div>
<?php
    interface Tamplate {
        public function Metodo1();
        public function Metodo2($parametro);
    }

    abstract class ClasseAbstrata{
        public function Metodo3(){
            echo "Metodo 3 <br>";
        }
    }

    class Classe extends ClasseAbstrata implements Tamplate{
      function __construct ($parametro){}

        public function Metodo2($parametro){
            echo "Estou funcionando metodo $parametro <br>";
        }
        public function Metodo1(){
            echo "Metodo 1<br>";
        }
    }

    $exemplo = new Classe("...");
    $exemplo->Metodo1();
    $exemplo->Metodo2(2);
    $exemplo->Metodo3();
?>