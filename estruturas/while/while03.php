<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1>Laço FOR com Select</h1>
	
<?php

echo "<select>";
	//Exibe do Ano Atual até Ano Atual -100
	for ($i = date("Y"); $i > date("Y")-100; $i--) { 

		/*Valor que o select alimenta e o valor que o select vai exibir*/
		echo '<option value = "'.$i.'">'.$i.'</option>';/*""=string    ''=valor*/
	}
echo "<select/>";

?>


	<ul>
		<li><a href="../estruturas.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>