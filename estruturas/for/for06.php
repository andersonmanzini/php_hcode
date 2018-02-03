<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Laço FOREACH</h1>

<form method="_GET">
	<input type="text" name="nome"/>
	<input type="date" name="nascimento"/>
	<input type="submit" name="OK"/>
</form>

<?php
	if (isset($_GET))	{

		foreach ($_GET as $key => $value) {
			
			echo "Nome do Campo: " .$key ."<br>";

			echo "Valor do Campo: " .$value;

			echo "<hr>";

		}

	}
?>

	<ul>
		<li><a href="../estruturas.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>