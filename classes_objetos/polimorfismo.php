<div class="titulo">Polimorfismo</div>
<?php

    abstract class Comida {
        public $peso;
    }

    class Arroz extends Comida {   }
    class Feijao extends Comida{   }
    class Sorvete extends Comida{  }


    class Pessoa{
        public $peso1;

       function __construct($peso)
        { $this->peso1 = $peso;    }

        public function comer(Comida $comida)
        {
            $this->peso1 += $comida->$peso;

        }
    }
    $c1 = new Arroz();
    $c1->peso=0.65;

    $p= new Pessoa(83.45);
    $p->comer($c1);

    echo $p->peso1;


?>