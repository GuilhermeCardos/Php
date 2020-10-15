<div class="titulo">Membros Estáticos</div>
<?php 
    class A{

        public $naostatic='Variavel de instantica';
        public static $static='Variavel de classe (Estática)';

        public function mostraA(){
            echo"Não estaticos = {$this->naostatic}<br>";
            echo "Estatico = ". self::$static ."<br>"; // Para acessar um membro estático "SELF"
        }

        public static function MostrarStaticA(){ // Dentro de uma função statica só consegue acessar um atributos staticos. 
            echo "Estático= ". self::$static."<br>";

        }
    }
    
    $objA = new A();
    $objA -> mostraA(); 
    
    echo '<br>';
    
    $objA -> MostrarStaticA(); // Esse não é o modo ideal para acessar uma função estatica. Poque ela não pertence a objeto, mas a Class.
    A::MostrarStaticA();
    echo A::$static;

        echo '<br>';
    A:: $static = 'Alterado';
    echo A::$static;
?>