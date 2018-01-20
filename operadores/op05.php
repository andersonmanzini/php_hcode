<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Operadores Novos PHP7</h1>
	
<?php

	$a = 50;

	$b = 35;

	$c = 30.0;

	$d = 35;

			var_dump($a <=> $b);//se a>b mostra 1
			echo "<br>";
			var_dump($b <=> $d);//se b=d mostra 0
			echo "<br>";
			var_dump($c <=> $b);//se c<b mostra -1
			echo "<br>";
?>

	<ul>
		<li><a href="operadores.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>