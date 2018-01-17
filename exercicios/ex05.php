<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Escopo de Variáveis</h1>
	<p>Cada função utiliza sua própria variável, a menos que se use "global"</p>

<?php
	
	$nome = "Anderson Luis Manzini";
	//Cria uma função
	function teste()	{

		global $nome;//Sem essa linha a variável não será enxergada
		echo $nome;

	}

	function teste2()	{

		$nome = " João";

		echo $nome ." agora no teste2";

	}
	//Chama a função
	teste();
	teste2();
			
?>

	<ul>
		<li><a href="../index.php">Voltar</a></li>
	</ul>

</body>
</html>