<?php
    
    session_start();
    
    session_destroy();
    
    //Limpando o cookie
    unset($_COOKIE['usuario']);
    setcookie('usuario',' ');

    header("Location: login.php");
?>