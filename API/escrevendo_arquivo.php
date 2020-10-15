<div class="titul">Escrevendo Arquivo</div>
<?php
    // Passa o nome do arquivo e depois o Modo, que nesse caso vai escrever 'W' -> Write
    $arquivo = fopen('teste.txt','w'); //Sempre vai ser Sobreescrito nesse caso.
    fwrite($arquivo, "Valor Inicial\n");
    $str = "Segunda Linha\n";
    fWrite($arquivo, $str);
    fclose($arquivo); // Fechar o arquivo e elimina todo o conteúdo

    $arquivo = fopen('teste.txt', 'w');
    fwrite($arquivo, "Novo conteúdo\n");
    fclose($arquivo);

    $arquivo = fopen('teste.txt', 'a'); // append - Acrescenta novos conteúdos
    fwrite($arquivo, "com novos valores\n");
    fwrite($arquivo, "Adicionados em um segundo momento\n");
    fclose($arquivo);

    //'X' Garante que o arquivo não existe dentro do contexto, caso contrário ele não executa o procedimento. 
     $arquivo = fopen('teste.txt', 'x');
    //fwrite($arquivo, "com novos valores\n");
    //fclose($arquivo);
?>