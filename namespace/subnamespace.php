<?php namespace App?>
<div class="titulo">Sub-Namespaces</div>
<?php
    echo __NAMESPACE__.'<br>';
    const CONSTANTE = 123;
    echo CONSTANTE.'<br>';
   
    
    namespace App\Principal;
    echo __NAMESPACE__ .'<br>';
    const CONSTANTE = 456;
    echo CONSTANTE.'<br>';
    

    namespace App\Principal\Especifico;
    echo __NAMESPACE__.'<br>';
    const CONSTANTE = 789;
    echo CONSTANTE.'<br>';
    echo constant('\\'.__NAMESPACE__.'\CONSTANTE').'<br><br>';
    //FORMAS DE ACESSAS AS CONSTANTES DE OUTROS NAMESPACE

    
    
    echo \App\CONSTANTE.'<br>';
    echo \App\Principal\CONSTANTE.'<br>';
    echo \App\Principal\Especifico\CONSTANTE.'<br>';

?>