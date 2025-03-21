<?php
    ini_set('default_charset', 'UTF-8');
?>

 <html>
 	<head>
 		<title>editar dados do cliente</title>
 	
 	</head>
 	<body>
 	
 	<h1><font color="green">editar dados do cliente</font></h1>
 	
 	<?php 
 	if (isset($_POST['xconfirmar'])):
 	
 	include ("conexao.php");
 	
 	$xconta = $_POST['xconta'];
 	
 	$sql = mysql_query($conexao, "SELECT * FROM contas WHERE conta= '$xconta'");
 	
 	$linha = mysql_num_rows($sql);
 	
 	if ($linha == 0){
 	    
 	    echo " <span style='color:green;'> conta inexistenteeee!!!!!!!!!!!!!!!!!!</span>";
 	    echo " <a hre='editar.php'> voltar </a>";
 	    return 0;
 	}
 	
 	while ($l=mysqli_fech_array($sql)) {
 	    
 	    $conta = $_l['conta'];
 	    $senha = $_l['senha'];
 	    $agencia = $_l['agencia'];
 	    $banco = $_l['banco'];
 	    $cliente = $_l['cliente'];
 	    $cpf = $_l['cpf'];
 	    $telefone = $_l['telefone'];
 	    $endereco = $_l['endereco'];
 	    $email = $_l['email'];
 	    $data_abertura = $_l['data_abertura'];
 	    $data_encerramento = $_l['data_encerramento'];
 	    $status = $_l['status'];
 	  
 	    
 	}
 	 
 	
 	
 	endif;
 	
 	
 	
 	?>
 	
 	<html>
	<head>
		<title></title>
	</head>
	<body>
	
	<h1><font color="green"></font></h1>

 	
 	<form method="post" action="">
	<table>
	<tr>
		<td>conta:</td>
		<td><input name="conta" size= "50" value ="<?php echo $conta; ?>" ></td>
		</tr>
		
		<tr>
		<td>senha:</td>
		<td><input name="senha" size= "50" value = "<?php echo $senha; ?>"></td>
		</tr>
		
		<tr>
		<td>agência:</td>
		<td><input name="agencia" size= "50" value = "<?php echo $agencia; ?>"></td>
		</tr>
		
		<tr>
		<td>banco:</td>
		<td><input name="banco" size= "50" value ="<?php echo $banco; ?>"></td>
		</tr>
		
		<tr>
		<td>cliente:</td>
		<td><input name="cliente" size= "" value = "<?php echo $cliente; ?>"></td>
		</tr>
		
		<tr>
		<td>cpf:</td>
		<td><input name="cpf" size= "" value = "<?php echo $cpf; ?>"></td>
		</tr>
		
		<tr>
		<td>telefone:</td>
		<td><input name="telefone" size= "50" value = "<?php echo $telefone; ?>"></td>
		</tr>
		
		<tr>
		<td>endereço:</td>
		<td><input name="endereco" size= "" value = "<?php echo $endereco; ?>"></td>
		</tr>
		
		<tr>
		<td>e-mail:</td>
		<td><input name="e-mail" size= "" value ="<?php echo $email; ?>"></td>
		</tr>
		
		<tr>
		<td>data de abertura:</td>
		<td><input name="data_abertura" size= "" value = "<?php echo $data_abertura; ?>"></td>
		</tr>
		
		<tr>
		<td>data do encerramento:</td>
		<td><input name="data_encerramento" size= "" value = "<?php echo $data_encerramento; ?>"></td>
		</tr>
		
		<tr>
		<td>status:</td>
		<td><input name="status" size= "" value = "<?php echo $status; ?>"></td>
		</tr>
		
	</table>
	
	<button type="submit" name="validar" style="background-color:blue; color:white">validar</button>
	<button type="submit" name="cancelar" style="background-color:blue; color:white">cancelar</button>
	
	</form>
	</body>
	
	
	<?php 
 if (isset($_POST['validar'])):
 
    include ("conexao.php");
 
    $conta = $_POST['conta'];
    $senha = $_POST['senha'];
    $agencia = $_POST['agencia'];
    $banco = $_POST['banco'];
    $cliente = $_POST['cliente'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $data_abertura = $_POST['data_abertura'];
    $data_encerramento = $_POST['data_encerramento'];
    $status = $_POST['status'];
    
    $sql_mysqli_query($conexao, "UPDATE contas SET senha='$senha', agencia='$agencia', banco='$banco', cliente='$cliente', cpf='$cpf', telefone='$telefone', endereco='$endereco', email='$email',
data_abertura='$data_abertura', data_encerramento='$data_encerramento', status'$status' where conta='$conta'");



header("Location:abrirContas.php");
endif;


    if (isset($_POST['cancelar'])):
    
        header("Location:abrirContas.php");
        endif;










