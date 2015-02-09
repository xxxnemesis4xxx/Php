<html>
	<?php
			header('Content-Type: text/html; charset=utf-8');
			setlocale(LC_ALL, 'fr_CA');
	?>
	<head>
		<title>Laboratoire 3 - Ex3 </title>	
	</head>
	<body>
		<?php
if (file_exists("Lab3phpFichier.txt")) {
			if ($fp=fopen("Lab3phpFichier.txt","a")) {
				foreach($_POST AS $key => $value)
				{
					if (htmlentities($key) != "Submit")
					{
						$formulaire[$key] = $value;
						fputs($fp, "\n"); 
						fputs($fp, "$key|$value"); 
					}					
				}
				fclose($fp);
				echo "L'enregistrement a réussi.<br/><br/>Les valeurs du tableau : <br/>";
				foreach($formulaire AS $key => $value)
				{
					echo htmlentities($key) . " : " . htmlentities($value) . "<br/>";
				}
			} 
			else {
				echo "L'enregistrement n'a pas réussi.";
				exit();
			}
}
else
{
	echo "Fichier introuvable";
	exit();
}
		?>
	</body>
</html>
