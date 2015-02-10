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


		if (file_exists("Lab3phpFichier.txt"))
		  	$fp = fopen("Lab3phpFichier.txt", "r");
		else{
		  	echo "Fichier introuvable !<br>Importation stoppée.";
		  	exit();
		}
		?>
		<?php
		echo "<br/><br/>";
		$compteur = 0;
		while (!feof($fp)){ 
		  	$ligne = fgets($fp,4096);
		  	$liste = explode("|",$ligne);
				if (strcasecmp($liste[1],$_COOKIE['acookie']) == 1 || $compteur != 0)
				{
		  		$nom = $liste[0];
		  		$valeur = $liste[1];
		  		echo "$nom : $valeur<br>";
					if ($compteur == 7)
						$compteur = 0;
					else
						++$compteur;		
				}
		}	
		fclose($fp); 
	?>
	</body>
</html>
