<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Exemplo chamando arquivo function.php</h1>	

<?php

/*Tenta funcionar mesmo que tenha erros
include "function.php";*/

/*Obriga a existência do arquivo e que esteja funcionando*/
require_once "function.php";
/*require_once não deixa o arquivo ser chamado duas vezes*/

$resultado = somar(10, 25);

	echo $resultado;
			
?>

	<ul>
		<li><a href="include.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>