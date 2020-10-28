<?php
    session_start();
    error_reporting(E_ERROR);

    $email= $_POST['email'] ?? ' ' ;
    $senha= $_POST['senha'] ?? ' ' ;

    if($_POST['email']){
        $usuarios = [
            [
                "nome" =>  "LUIZ GUILHERME",
                "email" => "guiilherme.cz@gmail.com",
                "senha" => "guilherme",
            ],
            [
                "nome" =>  "KAROL CARDOSO",
                "email" => "karollinny.latavanha@gmail.com",
                "senha" => "karol",
            ],
            [
                "nome" =>  "GABRIEL XAVIER CARDOSO",
                "email" => "gabriel.xavier@gmail.com",
                "senha" => "gabriel",
            ],
        ];

        foreach ($usuarios as $usuario){
            
            $email_valido = $email === $usuario['email'];
            $senha_valida = $senha === $usuario['senha'];

            if($email_valido && $senha_valida) {
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                
                //Segundos minutos horas dias
                $expiração = time() + 60 * 60 * 24 * 30;
                setcookie('usuario', $usuario['nome'], $expiração);

                header("Location: index.php");
            }
        }
      
        if(!$_SESSION['usuario']) {
            $_SESSION['erros']= ['Usuário ou senha invalidos!'];
        }
    }
?>