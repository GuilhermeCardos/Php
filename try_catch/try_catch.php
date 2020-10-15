<div class="titulo">Tratamento de Erro (Try Catch)</div>
<?php

    //echo intdiv(7/0);

    try{
        echo intdiv(7,0);
    } catch(Error $erro){
        echo 'Teve um erro aqui<br><br>';
    }
    //Sempre nessa ordem= Erro especificos depois os erros genericos.
    try
    {
        throw new Exception('Um erro muito estranho aconteceu');
        echo intdiv(7,0);
    }
    catch (DivisionByZeroError $e)  /*Erro especifico  */
    {   
        echo 'Divisão por zero.<br>';
    } 
    catch (throwable $e)/* Globa todos os tipos de erros*/
    {  
        echo 'Erro encontrado: '.$e->getMessage(). '<br>'; 
    }
    finally
    { 
       echo 'O FINALLY sempre será executado. indepedente do erro<br>';
    }

    echo 'Execução do código continua ... <br>';

?>

