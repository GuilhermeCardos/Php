<div class="titulo">Interface</div>
<?php
    /* 
        Na interface são apresentados metódos que serão 
        necessário ser implementados, caso a classe Herde(implements) a Interface. 
        São Funções Pre-defidas.  
        Interface só podem ter MÉTODOS  E MÉTODOS PUBLICOS. 
    */

    interface Animal{
        public function Respirar();
    }

   interface Canino extends Animal{
       public function Latir() : string; //' : '->" Vai retornar".OBS: É necessário usar na função quando for definida na class"  
   }
   
   
   
   
    /* 
        Apartir do momento que a class 'implements' a interface 'Animal', 
        ela tem obrigatóriedade em implementar a função 'respirar'.
    */

    class Cachorro implements Canino{ 
        
        public function Respirar()
        {  return 'Irei usar Oxigênio!';  }

        public function Latir() : string 
        { return 'Latir...';  }
    }


    $cachorro = new Cachorro();
    echo $cachorro -> Respirar(), '<br>';
    echo $cachorro -> Latir(), '<br>';

    var_dump($cachorro);echo'<br>';
    var_dump($cachorro instanceof Cachorro); echo'<br>';
    var_dump($cachorro instanceof Canino); echo'<br>';
  

    

?>