<div class="titulo">Argumentos Variáveis</div>
<?php


   function Soma($a,$b){
        return $a +$b;
    }

    echo Soma(12,15).'<br>';
    echo Soma(12,10,16,17) . '<br>';// Ele só irar somar os primeiros dois números. 

    function SomaCompleta(...$numero){ // Cria-se uma Array e comporta todos os numeros inserido na função
        //print_r($numero); Mostra que a Variavel 'numero é uma Array
        $soma=0;
        foreach($numero as $num)
        {
            $soma += $num;
        }
        return $soma;
    }

    echo SomaCompleta(5, 4, 3, 2, 1);

    /*
        Nesta condição como a função já cria uma array  e hora de utilizar a função manda-se uma outra array, isso acaba entrando em confito
        Então para evitar esse erro, é necessário ao mandar array colocar os '...' na frente para a função criar uma Matriz. 
    */
    
    $array =[7,8,9,10];
    echo '<br>'. SomaCompleta(...$array);
    echo '<hr>';

    function Membros($titular, ...$dependencia){
        echo "Titular: $titular <br>";
        if($dependencia){
            foreach($dependencia as $depe){
                echo "Dependente: $depe<br>";
            }
        }
    }

    Membros('Guilherme', 'Gabriel', 'Lucas' ,'Mariana', 'Felipe');
    Membros('Karol');
  
?>