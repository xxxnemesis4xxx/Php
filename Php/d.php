<?php
session_start();
?>
<html>
	<?php
			header('Content-Type: text/html; charset=utf-8');
			setlocale(LC_ALL, 'fr_CA');
	?>
	<head>
		<title>Laboratoire 4</title>	
	</head>
	<body>
<p>
<?php
if ($_SESSION['session'] )
	{
		include("d.txt");
		echo "La session souhaite vous dire bonjour ";
		echo $_SESSION['session'];
	}	
	else
	{
		echo "Variable session inexistante!";
	}
?>
<br/><br/>
Le sport est un ensemble d'exercices physiques, se pratiquant sous forme de jeux individuels ou collectifs pouvant donner lieu à des compétitions. <br/><br/>

Le sport est un phénomène quasi universel dans le temps et dans l'espace humain. La Grèce antique, la Rome antique, Byzance, l'Occident médiéval puis moderne, mais aussi l'Amérique précolombienne ou l'Asie, sont tous marqués par l'importance du sport. Certaines périodes sont surtout marquées par des interdits.
<br/>
</p>
	</body>
</html>
