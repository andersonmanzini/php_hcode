<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Laço FOR</h1>
	
<?php
	/*PARA $i de 0 até 1000 "ele mesmo(+=) + 5" ..... $i = $i + 5*/
	for ($i = 0; $i <= 1000; $i += 5)	{

		if ($i > 200 && $i < 800) continue;/*Não imprime do 200 ao 800*/

		if ($i === 900) break; /*Valida o valor e o tipo da variável*/

		echo "$i<br>";
	}

?>


	<ul>
		<li><a href="../estruturas.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>