<div class="titulo">Include Função</div>
<?php
    echo 'Carregando: include_arquivo<br>';

    function carregarArquivo(){
        //include "include_arquivo.php";
        include('include_arquivo.php');
        
        echo $variavel.'<br>';
        echo soma(2,5) .'<br>';
    }

    echo'Novamente no arquivo include_função:';
    carregarArquivo();

    //echo $variavel.'<br>'; Não está disponivel atraves do include somente o método.
    echo soma(10,5).'<br>';
?>
