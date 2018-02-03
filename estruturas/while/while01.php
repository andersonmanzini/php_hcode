<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>While</h1>


<?php

$condicao = true;/*Variavel retorna true*/

	while ($condicao) {			/*Enquanto $condicao for true*/
	
	$numero = rand(1, 10);		/*$numero recebe 1 a 10 aleatorio*/

		if ($numero === 3)	{	/*Se $numero receber 3*/

			echo "TRÊS!!!";		/*Exibir 3*/

			$condicao = false;	/*Até $condicao ser 3*/
		}

		echo $numero ." ";		/*Espeço entre os numeros*/
}

?>

	<ul>
		<li><a href="../estruturas.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>