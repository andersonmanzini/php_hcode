<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Recebendo IP e Arquivo</h1>

<?php
	
	$ip = $_SERVER["REMOTE_ADDR"];
	$id = $_SERVER["SCRIPT_NAME"];

	echo $ip ."<br>" .$id;	
			
?>

	<ul>
		<li><a href="../index.php">Voltar</a></li>
	</ul>

</body>
</html>