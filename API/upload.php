<div class="titulo">Upload</div>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<?php
    print_r($_FILES);
    
    if($_FILES && $_FILES['arquivo']){
        
        $pastaUpload = '/Users/Guilherme/Desktop/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES ['arquivo'] ['tmp_name'];

        if(move_uploaded_file($tmp, $arquivo)){
            echo "<br> Arquivo válido e enviado com sucesso!" ;
        }else{
            echo"<br> Erro no Upload de arquivo!";
        }
    }
  
?>

<style>
    input, button{
        font-size: 1.2rem;
    }
</style>