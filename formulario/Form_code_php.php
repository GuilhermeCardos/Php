<?php
    if( count($_POST) > 0 )
    {
        $erros=[];

        //isset($_POST['nome']) 'OUTRA POSSIBILIDADE'
        if(!filter_input(INPUT_POST, "nome"))
        {
            $erros['nome'] = "Nome é obrigatório";
        }
        
        if(filter_input(INPUT_POST, "nascimento"))
        {
           $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
           if(!$data)
           {
            $erros['nascimento'] = "Data deve estar no padrão dd/MM/AAAA";
           }
        }
        
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) //validor de Email 
        {
            $erros['email'] = 'E-mail inválido';
        }
        
        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL))
        {
            $erros['site'] = 'Site inválido';
        }
        
        $filhosConfig = ["options"=>["min_range"=>0, "max_range"=> 20] ];
        if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] !=0) {
            $erros['filhos'] ='Quantidade de filhos inválida!';
        }

        $salarioConfig=['options'=> ['decimal' => ',']];
        if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig))
        {
            $erros['salario'] ='Salário inválido!';
        }
    }
?>