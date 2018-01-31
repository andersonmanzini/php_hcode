<!DOCTYPE html>
<html lang="pt-br">

<header>
	<meta charset="utf-8"/>
	<title>Curso PHP HCODE</title>
</header>

<body>
	<h1></h1>
	
<?php
	$diaDaSemana = date("w");/*Retorna o numero do dia da semana*/

	echo "Dia retornado pela função date() = $diaDaSemana<br><br>";

	//Define a variável que vai ser verificada
	switch ($diaDaSemana) {
	
		case 1:
			echo "Domingo";
			break;

		case 2:
			echo "Segunda-Feira";
			break;

		case 3:
			echo "Terça-Feira";
			break;

		case 4:
			echo "Quarta-Feira";
			break;

		case 5:
			echo "Quinta-Feira";
			break;

		case 6:
			echo "Sexta-Feira";
			break;

		case 7:
			echo "Sábado";
			break;
		
		default:
			echo "Data Inválida!";
			break;
		
	}



?>


	<ul>
		<li><a href="../estruturas.php">Voltar</a></li>
		<li><a href="../index.php">Pagina Inicial</a></li>
	</ul>

</body>
</html>