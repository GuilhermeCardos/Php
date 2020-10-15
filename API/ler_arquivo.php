<div class="titulo">Lendo Arquivos</div>
<?php
    $arquivo = fopen('teste.txt', 'r');//'R' Lendo arquivo
    
    //Irá passar o arquivo e a quantidade de bytes que será lidos.
    echo "--Lendo o texto passando a quantidade de bytes--<br>"; 
    
    echo (fread($arquivo, 10))."<br>";
    echo fread($arquivo, 15);
    fclose($arquivo);
    
    echo '<br><hr>';
    
    // Irá passar a quantidade de bytes do arquivo para ser lidos.
    echo "--Lendo o texto todo, entretando recebendo quantos bytes o texto tem! --<br><br> ";

    $arquivo = fopen('teste.txt','r');
    $tamanho = filesize('teste.txt'); 
    echo $tamanho. ' bytes. <br>'; 
    echo fread($arquivo, $tamanho);
    fclose($arquivo);

    echo '<hr>';
    
    // Função que ler por linha.
    echo "--Função que ler cada linha uma vez--<br><br>";
    $arquivo = fopen('teste.txt','r');
    echo fgets($arquivo), '<br>'; // Função que ler por linha.
    echo fgets($arquivo), '<br>';
    var_dump( fgets($arquivo)).'<br>';
    fclose($arquivo);

    echo '<hr>';
    echo "--Função que ler todas as linha de uma vez--<br><br>";
    // Função que ler todas as linhas.
    
    $arquivo = fopen('teste.txt','r');
    while(!feof($arquivo))
    { 
        echo fgets($arquivo);   
    }
    echo '<br>';
    fclose($arquivo);
    
    echo '<hr>';
    
    //Lendo caractere por caractere -> 'fgetC'
    echo "--Lendo caractere por caractere--<br><br> ";
    $arquivo = fopen('teste.txt','r');
    while(!feof($arquivo))
    { 
        echo fgetc($arquivo);   
    }
    echo '<br>';
    fclose($arquivo);

    echo '<br><hr>'; 
    //Lendo e alterando o arquivo
    echo "--Lendo e alterando o arquivo--<br><br>";

    $arquivo = fopen('teste.txt', 'r+');
    echo fgets($arquivo). '<br>';
    echo fgets($arquivo);
    fwrite($arquivo, "\nAdicionados durante a leitura!");
    fclose($arquivo);

    echo '<br>Fim';



?>