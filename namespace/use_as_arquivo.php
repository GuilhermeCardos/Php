<?php namespace Nome\Bem\Grande;

    echo __NAMESPACE__.'<br>';

    const CONSTANTE = 123;

    function Soma($a,$b){  return $a+$b; }

    class Classe{

        Public $var;

        function Func(){   echo __NAMESPACE__.'->'.__CLASS__.'->'.__METHOD__.'<br>'; }
    }
?>