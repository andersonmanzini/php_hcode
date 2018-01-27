<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Strings - Transformando strings</h1>
	
<?php
		$nome1 = "anderson manzini";
		$nome2 = "ANDERSON MANZINI";

		echo "$nome1<br>";
		echo strtoupper($nome1);

		echo "<br><br>";
		
		echo "$nome2<br>";
		echo strtolower($nome2);

		echo "<br><br>";
		
		echo "$nome1<br>";
		echo ucwords($nome1);		

		echo "<br><br>";

		echo "$nome1<br>";
		echo ucfirst($nome1);

		echo "<br><br>";

		echo "$nome2<br>";
		$nome2 = str_replace("A", "4", $nome2);
		echo $nome2;

?>

	<ul>
		<li><a href="strings.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>