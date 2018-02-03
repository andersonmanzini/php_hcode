<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>DO WHILE</h1>
	

<?php

$total = 100;
$desconto = 0.9;

	do {
		
		$total *= $desconto;

	} while ($total > 100);

	echo $total;

?>

	
	<ul>
		<li><a href="../estruturas.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>