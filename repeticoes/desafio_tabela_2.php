<div class="titulo">Desafio Tabela #2</div>
<form action="#" method="post">
    <label>Nº Colunas:</label><input type="number" value=<?=$_POST['coluna'] ?? 2?> name="coluna" id="coluna" /> <br>
    <label>Nº Linhas:</label><input type="number"  value=<?=$_POST['linha'] ?? 2?> name="linha" id="linha"/><br> 
    <button>Enviar</button>
</form>
<?php
    $coluna = intval($_POST['coluna']);
    $linha = intval($_POST['linha']);
    $n=1;
    if(!$coluna) $coluna=2;
    if(!$linha) $linha=2;

    echo'<table border=1>';
    for($l=0; $l < $linha; $l++)
    {
        echo '<tr>';
        for($c=0; $c <$coluna; $c++)
        {
            $matrix[$l][$c] = $n++;
           echo "<td> {$matrix[$l][$c]} </td>";
        }
        echo'</tr>';
    }
    echo'</table>';
   
   
    
?>

<style>
    table {
        border : 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr{
        border: 1px solid #444;
    }
    table td {
        padding: 10px 20px;
    }
</style>