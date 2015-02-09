<html>
 <!-- Restart apache server sudo /etc/init.d/apache2 restart -->
	<?php
		header('Content-Type: text/html; charset=utf-8');
		setlocale(LC_ALL, 'fr_CA');
	?>
	<head>
		<title> Laboratoire 3 - Ex 1 </title>
	</head>
	<body>
		<?php
			$date = date("d/m/Y");
			$heure = date("H:i");
			Print("Nous sommes le $date et il est $heure");
		?>

		<br/><br/>

		<?php include("adresse.txt"); ?>

		<?php
			$filename = 'adresse.txt';
			echo "la date de dernière modification du fichier $filename est le " . utf8_encode(strftime("%e %B %Y %H:%M:%S.", filemtime($filename)));
		?>

		<br/><br/>
		<?php echo "L'adresse ip du serveur : " . $_SERVER['SERVER_ADDR']; ?>
		<br/>
		<?php echo "L'adresse ip du client : "	.$_SERVER['REMOTE_ADDR']; ?>	
	</body>
</html>
