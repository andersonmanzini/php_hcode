<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1></h1>
	
<?php

$suaIdade = 65;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

	if ($suaIdade < $idadeCrianca)	{
	
		echo "Criança!";
	
	} else if ($suaIdade < $idadeMaior)	{

		echo "Adolescente!";

	} else if ($suaIdade < $idadeMelhor)	{

		echo "Adulto!";

	} else {

		echo "Idoso!";

	}

	echo "<br><br><br>";

	/*    ? = então   : = senão    */
	echo ($suaIdade < $idadeMaior)?"Menor de Idade!":"Maior de Idade!";			
?>


	<ul>
		<li><a href="estruturas.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>