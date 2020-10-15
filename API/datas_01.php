<div id="datas_01">Datas #01</div>
<?php
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'Brazil', 'Pt_BR.utf-8');

    echo time().'<br>'; 
    echo date('H:i:s').'<br>';
    
    echo date('D, d \d\e M \d\e Y').'<br>' ;
    
    echo date('D, d \d\e M \d\e  Y  H:i A ').'<br>';
    
    echo date('D, d / m / y') .'<br>';

    
    echo '<hr>';
    //String 
    setlocale(LC_TIME, 'Brazil', 'Pt_BR.utf-8');
    echo strftime('%A, %d de %B de %Y', time()). '<br>';

    $amanha = time() +(24*60*60);
    echo strftime('%A, %d de %B de %Y', $amanha ).'<br>';
    
    echo '-> Daqui a uma semana:<br>';
    $daqui_semana = strtotime('+1 week');
    echo strftime('%A, %d de %B de %Y', $daqui_semana).'<br>';

    $dataFixa = mktime(15,30,50,1,25,1975);
    echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);
    
     

   

    

    
    
    
?>