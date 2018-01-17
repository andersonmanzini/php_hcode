<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Método _GET</h1>
	<p>Colocar no navegador depois de .php?a=123&b=456</p>

<?php
	//Colocar no navegador depois de .php?a=123&b=456
	$nome = $_GET["a"];//recebe o valor como string

	var_dump($nome);


	$teste = (int)$_GET["b"];//(int) transforma em inteiro

	var_dump($teste);
			
?>

	<ul>
		<li><a href="../index.php">Voltar</a></li>
	</ul>

</body>
</html>