<?php
 ini_set('default_charset', 'UTF-8');
?>

<html>
	<head>
	<title>login do Administrador</title>
	</head>
	<body>
	
	<h1><font color="green">login do Administrador</font></h1>
	
	<form method="post" action="">
	<table>
		<tr>
			<td><input name="adm" type="hidden" value= "123@45"></td>
			</tr>
		<tr>
			<td><input name="senhaadm" type="hidden" value= "password"></td>
			</tr>
	</table>
	<br>
	<button type="submit" name="confirmar" style="background-color:green; color:blue">confirmar</button>
	<button type="submit" name="voltar" style="background-color:green; color:blue">voltar</button>
	
	</form>
	
	</body>
</html>

<?php 

    
    if (isset($_POST['confirmar'])):
    
    $adm=$_POST['adm'];
    $senhaadm=$_POST['senhaadm'];
    
    if ($senhaadm != $adm)
    {
        echo "<span style='color:red;'>você não tem permissão para o cadastro!</span>";
	    return 0;
    }
    else 
    {
            header("Location:AbrirContas.php");
    }
    endif;
    
    if (isset($_POST['voltar'])):
    header("Location:MenuPrincipal.php");
    
endif;

?>