<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Laço FOREACH</h1>
	
<?php

$meses = array(
	"Janeiro", "Fevereiro", "Março", "Abril",
	"Maio", "Junho", "Julho", "Agosto",
	"Setembro", "Outubro", "Novembro", "Dezembro"
);
	/*Para cada $meses faça exibe a frase em $mes*/
	foreach ($meses as $mes) {
		echo "O mês é:" .$mes ."<br>";
	}

?>

	<ul>
		<li><a href="../estruturas.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>