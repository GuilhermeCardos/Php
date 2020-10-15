<div class="titulo">Retornando Uma Função</div>
<?php
    function soma($a){
        return function ($b) use ($a){
            return $a + $b;
        };
    }
    echo soma(3)(7);
    $doisMais = soma(10);

    echo '<br>', $doisMais(40);
    echo '<br>', $doisMais(18);

    echo '<hr>';

    function ConversordeTemperatura($Temp, $tipo = 'C->k'){
        $nTipo = strtolower($tipo);
        if($nTipo === 'c->k')
        {
            $k = $Temp +273.15;
            echo "$Temp º Celsuis para Kevin = $k º";
        }
        elseif($nTipo === 'c->f')
        { 
           $f=($Temp * 1.8)+32; 
           echo "$Temp º Celsuis para Fahrenheit = $f º";
        }
    }
    $valor=29;
    ConversordeTemperatura($valor,'C->k');
   
?>