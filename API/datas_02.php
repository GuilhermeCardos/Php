<div class="titulo">Datas #02</div>
<?php
    $formatoData1 = 'D, d \d\e M \d\e Y';
    $formatoData2 = '%A, %d de %B de %Y';
    $formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

    $agora = new DateTime();
    //print_r($agora);

    echo $agora -> format($formatoData1)."<br>";
    setlocale(LC_TIME, 'PT-br');
    echo strftime($formatoData2, $agora->getTimestamp()).'<br>';

    $amanha = new DateTime('+1 week');//week day month year
    echo strftime($formatoData2, $amanha->getTimestamp()).'<br>';

    $dataFixa = new DateTime('1975-01-17  15:30:50');
    echo strftime($formatoDataHora, $dataFixa->getTimestamp()).'<br>';

    $amanha->modify('+1 day');
    echo strftime($formatoData2, $amanha->getTimestamp()).'<br>';

    $amanha->setDate(2000, 5, 21);
    echo strftime($formatoDataHora, $amanha->getTimestamp()).'<br>';

    //COMPARAÇÃO ENTRE DATAS 
    echo'<hr>';
    echo "Comparação entre Datas! <br> ";

    $dataPassada = new DateTime('2000-05-17');
    $dataFutura = new DateTime('2030-11-26');
    $OutraData = new DateTime('2030-11-26');

    echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
    echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
    echo ($OutraData == $dataFutura ? 'Igual' : 'Diferente') . '<br>';
    //$OutraData = $dataFutura;
    //$OutraData = &$dataFutura;
    echo ($OutraData === $dataFutura ? 'Igual' : 'Diferente') . '<br>';//Motivo: Locação de memória.


    // Alterando o TIMEZONE (Horário Local Exato)
    echo 'Alterando o TIMEZONE <br><br>';

    $tz = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime(null, $tz);
    echo $agora->format('d/M/Y  H:i:s');

?>