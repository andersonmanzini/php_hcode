<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Limpando variáveis</h1>

<?php

	$nome = 'Anderson';

	echo $nome;

	echo "<br>";

	//Limpa a variável da memória
	unset($nome);

	//Se a variável existir, imprima
	if (isset($nome))	{

		echo $nome;

	}
			
?>

	<ul>
		<li><a href="../index.php">Voltar</a></li>
	</ul>

</body>
</html>