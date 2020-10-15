<div class="titulo">Métodos Mágicos</div>
<?php
    class Pessoa {
        public $nome;
        public $idade;

        //public function getNome(){ return $this->nome; }
        //public function setNome($n){  $this->nome=$n;  }

        public function __Construct($n, $idade){
            echo 'Construtor Inicializado! <br>';
            //setNome($nome);
            $this->nome= $n;
            $this->idade=$idade;
        }
        public function __Destruct (){  echo 'Excluido!'; }

        public function __toString() // Converte em String
        { return "{$this->nome} Tem {$this->idade} anos.";}

        public function Status(){
            echo $this."<br>";
        }

        public function __get($atri)
        {  echo "Lendo atributo não declarado: {$atri} <br>";   }
        public function __set($atri, $valor)
        {  echo "Alterando atributo não declarado: {$atri}/ {$valor}";  }

        public function __call($metodo, $param){
            echo "Tentando executar o método '{$metodo}'";
            echo ", com os parametros: ";
            print_r($param); 
        }
    }

    $pessoa = new Pessoa('Ricardo', 40);// __Construtor
    //$pessoa->Status(); //Chamando  o To_string

    //echo $pessoa, '<br>';//Chamando  o To_string
    //$pessoa->nome='Reinaldo';
    //$pessoa->Status(); //Chamando  o To_string

    //$pessoa->nomeCompleto='Muito Legal!'; //__set
    //$pessoa->nomeCompleto; //__get
    //echo $pessoa->nome; // Acesso direto sem o __get
    $pessoa->exec(1, 'test', true, [1,2,3]);///__Call porque o metodo não existe.

    $pessoa=null;//__Destrutor
    ?>