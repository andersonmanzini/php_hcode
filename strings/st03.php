<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Strings</h1>
	
<?php
	
	$frase = "A repetição é mãe da retenção.";

	/* Variável $q busca a posição de "mãe"(fim da palavra) em $frase */
	$palavra = "mãe";

	$q = strpos($frase, $palavra);

	/* Variável $texto vai receber a partir de 0 até a posição de $q*/
	$texto = substr($frase, 0, $q);

	var_dump($texto);

	/* $texto2 recebe $frase a partir da posição de $q(17pos)+$palavra(3pos)
	até o fim de $frase*/
	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
	
	echo "<br><br>";
	
	var_dump($texto2);

	echo "<br><br>";

	echo "$texto $palavra $texto2";
			
?>

	<ul>
		<li><a href="strings.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>