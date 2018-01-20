<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Operadores de Comparação</h1>
	
<?php

	$a = 30;

	$b = 55;

	$c = 30.0;

	var_dump($a > $b);
	echo "<br>";
	var_dump($a < $b);
	echo "<br>";
	var_dump($a == $b);//analisa a igualdade do valor da variavel 
	echo "<br>";
	var_dump($a === $b);//analisa a igualdade do tipo da variavel
	echo "<br>";
	var_dump($a != $c);//diferente de
	echo "<br>";
	var_dump($a !== $c);//diferente de
			
?>

	<ul>
		<li><a href="operadores.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>