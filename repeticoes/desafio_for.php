<div class="titulo">Desafio For</div>
<?php
    $cont;
    $imprenssao ='';
    for($i=0; $i<5; $i++){
        $imprenssao.='#';
        echo "$imprenssao<br>";
    }
    echo '<hr>';
    
    for($impressao2='#'; $impressao2!=='######'; $impressao2.='#'){
        
        echo "$impressao2<br>";       
    }
?>