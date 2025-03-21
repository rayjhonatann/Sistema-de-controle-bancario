<?php
    ini_set('default_charset', 'UTF-8');
 ?>
 
 <html>
 	<head>
 		<title>Sisbank</title>
 	</head>
 	<body>
 	
 	<h1><font color="green">Sistema de controle bancario</font></h1>
 	<form method="post" action="">
 	<br><br>
 	<button type="submit" name="Lancamentos" style="background-color:blue; color:white">lançamentos</button>
 	<button type="submit" name="Extratos" style="background-color:blue; color:white">extratos</button>
 	<button type="submit" name="Saldos" style="background-color:blue; color:white">saldos</button>
 	<button type="submit" name="AbrirContas" style="background-color:blue; color:white">abrir Contas</button>
 	
 	</form>
 	</body>
 </html>
 
 <?php 
    if (isset($_POST['Lancamentos'])):
    header("Location:Lancamentos.php");
endif;

if (isset($_POST['Extratos'])):
header("Location:Extratos.php");
endif;

if (isset($_POST['Saldos'])):
header("Location:Saldos.php");
endif;

if (isset($_POST['AbrirContas'])):
header("Location:AdmLogin.php");
endif;

 ?>