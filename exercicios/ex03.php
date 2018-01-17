<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Tipos de Dados</h1>

<?php

	$nome = 'Anderson';
	$email = 'andersonmanzini@gmail.com';

	$anoNascimento = 1984;
	$salario = 5380.48;
	$bloqueado = false;

	$frutas = array('abacaxi', 'laranja', 'manga');

	//echo $frutas[0];

	//Orientação a Objeto
	$nascimento = new DateTime();

	//var_dump($nascimento);
	//////////////////////////////////////////////////////////////

	$arquivo = fopen("ex03.php", "r");

	//var_dump($arquivo);

	$nulo = NULL;
		
?>

	<ul>
		<li><a href="../index.php">Voltar</a></li>
	</ul>

</body>
</html>