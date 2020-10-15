<div class="titulo">Map & Filter</div>

<?php
        // AMBAS FUNÇÕES SEMPRE RETORNA UM ARRAY NOVO. ELA NÃO ALTERA O ARRAY DE FORA/ANTERIOR //
    // MAP - Recebe o array completo e transforma os valores em outros.  (Função de transformação)
    // FILTER - Recebe os valores dentro da array e responde TRUE ou FALSE (Função de Filtar) dependendo da condição, se for TRUE o elemento estará    presente se for FALSE não estará presente na situação 
    



    $notas = [9.8, 5.8, 7.3, 6.7];
    $notasFinais=[];

    foreach ($notas as $nota)
    { $notasFinais[]= round($nota); }  //round É um método Arrendonda o número.

    print_r($notasFinais);
    
    echo '<hr> ';
    echo 'Utilizando a função MAP<br>';
    $notasFinais1 = array_map("round", $notas); //Round Como é uma  Função precisa ser entre " " .
    // MAP (PRIMEIRO A FUNÇÃO, SEGUNDO O ARRAY) !!!
    print_r($notasFinais1);

    echo "<br>";
    echo '<hr>';
    //------------------------------------------------------------------------------------------
    
    $apenasOsAprovados =[];
    foreach($notas as $nota)
    {
        if($nota>=7)
        { $apenasOsAprovados[] = $nota; }
    }
    echo 'Usando a função Filter<br>';
    print_r($apenasOsAprovados); //Metodo tradicinal e mais demorado

    // FILTER - FILTRO
    echo '<br>';
    function Aprovados($nota) 
    { return $nota>= 7; }

    $apenasOsAprovados1 = array_filter($notas, "Aprovados"); //Metodo Simples Usando o FILTER
    // FILTER (PRIMEIRO ARRAY, SEGUNDO A FUNÇÃO)!!!

    print_r($apenasOsAprovados1);
    //----------------------------------------------------------------------------------------
    echo "<hr>";
    function CalculoLegal($nota)
    {
        $notaFinal= round($nota)+1;
        return $notaFinal >10 ? 10 : $notaFinal;
    }
    $notasFinais2 = array_map("CalculoLegal", $notas);
    print_r($notasFinais2);
    
?>