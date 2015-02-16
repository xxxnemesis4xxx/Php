<html>
	<?php
		header('Content-Type: text/html; charset=utf-8');
		setlocale(LC_ALL, 'fr_CA');
	?>
	<head>
		<title>Laboratoire 4 - Upload</title>
	</head>
	<body>
		<?php
		// Fonction pour identifier le succès ou l'insuccès
		function code()
		{
			echo "<br> 0= réussi, 1= taille du fichier trop grande selon php.ini";
			echo "<br> 2= taille du fichier trop grande selon formulaire, 3= partiellement transmis, 4= fichier non transmis";
		}	
		//chemin pour l'enregistrement du fichier
		$dir = "/home/xxxnemesis4xxx/site/upload/";
		//si le fichier existe
			if (isset($_FILES["fichier"])){
				echo "Upload du fichier ". $_FILES["fichier"]["name"] . " en cours...<P>";
		}
			//copie du fichier du dossier temporaire au bon endroit
			if ( @copy($_FILES["fichier"]["tmp_name"],$dir.$_FILES["fichier"]["name"])){
				echo "Transmission réussis!!!<BR>dans le dossier /home/xxxnemesis4xxx/site/upload/<P>";
			echo "Code d'erreur=".$_FILES["fichier"]["error"];
			code();
		}
		else {
			echo "Transmission non-réussis !@%*&**¾*$!<P>";
			echo "Code d'erreur=".$_FILES["fichier"]["error"];
			code();
		}
		?>
		</body>
	</html>
