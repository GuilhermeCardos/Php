<div class="titulo">Visibilidade</div>
<?php
    class A {
        public $publico = 'Publico';
        protected $protegido ='Protegido';
        private $privado = 'Privado';

        public function mostrarA(){
            echo "A) Publico = {$this->publico}<br>";
            echo "A) Protegido = {$this->protegido}<br>";
            echo "A) Privado = {$this->privado}<br>";
            $this->naoMostrar();
        }
        //public function mostrarAA(){ $this->naoMostrar(); }
        
        private function naoMostrar(){
            echo'Não imprimir <br>';
        }
    }

    $a = new A();
    $a ->mostrarA();
    //$a ->naoMostrar();
    echo'<br>';

    class B extends A {

        public function MostrarB(){
            echo "Classe B) Publico = {$this->publico}<br>";
            echo "Classe B) Protegido = {$this->protegido}<br>";
            //echo "Classe B) Privado = {$this->privado}<br>";
            //parent :: mostrarAA();

        }
    }

    $b = new B();
    $b ->MostrarB();
?>