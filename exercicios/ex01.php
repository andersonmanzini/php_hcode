<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Concatenar e atribuir valores às variáveis</h1>

<?php

	$nome = 'Anderson';
	
	$sobrenome = 'Manzini';
	
	$idade = 33;

		//Esse método concatena o valor depois do ponto
		echo $nome .' ' .$sobrenome .' tem ' .$idade .' anos.<br><br>';

		//Esse método concatena sem precisar do ponto
		echo "$nome $sobrenome tem $idade anos.<br><br>";

		//Imprime o tipo de variável
		var_dump($nome, $sobrenome, $idade);
		
?>

	<ul>
		<li><a href="../index.php">Voltar</a></li>
	</ul>

</body>
</html>
