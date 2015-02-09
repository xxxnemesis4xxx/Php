<html>
	<head>
		<?php
			header('Content-Type: text/html; charset=utf-8');
			setlocale(LC_ALL, 'fr_CA');
		?>
		<title>Laboratoire 3 - Ex2 </title>	
	</head>
	<body>
		<?php
		if ($_REQUEST['sexe'] == 'homme') {
			echo 'Monsieur ';
		} else {
			echo 'Madame ';
		}
		?>
		<?php
			echo htmlentities($_REQUEST['nom']) . ',';
		?><br/>
		<?php
			echo 'Vous avez choisi la catégorie suivante : ';
			if ($_REQUEST['selection'] == 'sport') {
				echo 'Sport<br/>';
?>
<?php
				include("sport.txt");
			}
			else if ($_REQUEST['selection'] == 'actualite') {
				echo 'Actualité<br/>';
?>
<?php
				include("actualite.txt");
			}
			else if ($_REQUEST['selection'] == 'finance') {
				echo 'Finance<br/>';
?>
<?php
				include("finance.txt");
			}
			else
			{
				echo 'Météo<br/>';
?>
<?php
				include("meteo.txt");
			}
		?> <br/>
	</body>
</html>
