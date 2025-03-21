<?php
    ini_set('default_charset', 'UTF-8');
?>

<html>
	<head>
		<title>abertura de Contas</title>
	</head>
	<body>
	
	<h1><font color="green">abertura de Contas</font></h1>
	
	<form method="post" action="">
	<table>
	<tr>
		<td>senha:</td>
		<td><input name="semha" size= "" autocomplete="off"></td>
		</tr>
		
		<tr>
		<td>nome:</td>
		<td><input name="nome" size= "" autocomplete="off"></td>
		</tr>
		
	</table>
	
	<button type="submit" name="Cadastrar" style="background-color:blue; color:white">cadastrar</button>
	<button type="submit" name="excluir" style="background-color:blue; color:white">voltar</button>
	<button type="submit" name="Voltar" style="background-color:blue; color:white">voltar</button>
	
	</form>
	</body>

</html>

<?php 
 if (isset($_POST['cadastrar'])):
 
    include ("conexao.php");
 
    $senha = $_POST['senha'];
	$nome = $_POST['nome'];

    
    $sql_mysqli_query($conexao, "INSERT INTO usuarios(senha, nome) 
    VALUES('$senha', '$nome')");
    
    if ($sql==true) {
        echo "<span style='color:green;'>Cadrastro efetuado com sucesso!</span>";
    }
 else 
 {
     echo "<span style='color:green;'>Error: Cadastro cancelado! = </sapn>";
 }
    echo "<a href=MenuPrincipal.php><span style='background-color:green; color:white'> voltar </a></span>";
    endif;
    
    if (isset($_POST['editar'])):
    
        header("Location:Editar.php");
        endif;
        
        if (isset($_POST['voltar'])):
        
            header("Location:MenuPrincipal.php");
            endif;

?>