<div class="titulo">While / Do While</div>
<?php
    const VALOR_LIMITE= 5;
    $contador = 0;
    
    while($contador< VALOR_LIMITE) {
        echo"Valor $contador <br>";
        $contador++;
    }

    echo'<hr>';

    // O 'do while' é a unica estrutura de condição que no final da condição recebe ';' !
    $contador1 = 0;
    do{

        echo "Valor $contador1<br>";
        $contador1++;
    
    }while($contador1 <   VALOR_LIMITE);

    echo '<hr>';
    
    $contador2 = 0;
    for(;$contador2< VALOR_LIMITE;) {
        echo"Valor $contador2 <br>";
        $contador2++;
    }

    echo '<hr>';
    
    $contador = 5;
    const LIMITE =0; 

    while(true){
        echo "valor $contador <br> ";
        $contador--;
        if($contador <= LIMITE){ break; }
    }
?>