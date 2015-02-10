<html>
	<?php
			header('Content-Type: text/html; charset=utf-8');
			setlocale(LC_ALL, 'fr_CA');
	?>
	<head>
		<title>Laboratoire 4</title>	
	</head>
	<body>
		<?php
		if ($_COOKIE["acookie"])
		{	
			echo "Bonjour " . $_COOKIE['acookie'] . ", merci de revenir nous visiter!";
		}
		else echo "L'inscription est nécessaire!";

		?>
	</body>
</html>
