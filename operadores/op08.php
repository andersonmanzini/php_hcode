<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Expressões Lógicas E</h1>
	<code>( 10 + 3 ) / 2  >  5  <b>&&</b>  10 +5  <  3 = </code>

<?php
	//1ª equação (6.5) é maior que 5(V), E 2ª equação (15) é menor que 3(F)?
	$resultado = (10+3) / 2  >  5  &&  10 +5  <  3; //falso

	var_dump($resultado);
			
?>

	<h1>Expressões Lógicas OU</h1>
	<code>( 10 + 3 ) / 2  >  5  <b>||</b>  10 +5  <  3 = </code>
	
<?php
	//1ª equação (6.5) é maior que 5(V), OU 2ª equação (15) é menor que 3(F)?
	$resultado = (10+3) / 2  >  5  ||  10 +5  <  3; //Verdadeiro

	var_dump($resultado);
			
?>

	<ul>
		<li><a href="operadores.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>