<html>
	<?php
			header('Content-Type: text/html; charset=utf-8');
			setlocale(LC_ALL, 'fr_CA');
	?>
	<head>
		<title>Préparation Examen</title>
	</head>
	<body>
	<p>
		Opérateur ternaire : <br/>echo ($nombre == 1) ? '$nombre est égal à 1' : '$nombre n\'est pas égal à 1'; <br/>Résultat : <br/>
		<?php
			echo ($nombre == 1) ? '$nombre est égal à 1' : '$nombre n\'est pas égal à 1'; 
		?>
	</p>
	<p>
-------------------------------------------------------------<br/>
Switch case <br/>
$nomb = 2;<br/>
		switch($nomb) { <br/>
		case 1:<br/>
			echo '$nomb est egal a 1';  <br/>
		break;<br/>
		case 2:<br/>
			echo '$nomb est egal a 2';  <br/>
		break;<br/>
		case 3:    <br/>
			echo '$nomb est egal a 3';  <br/>
		break;<br/>
		default:<br/>
			echo '$nomb est inferieur à 1 ou superieur a 3';  <br/>
		} <br/><br/>Résultat : <br/>
		<?php
			$nomb = 2;
			switch($nomb) {
			case 1:
				echo '$nomb est egal a 1';  
			break;
			case 2:
				echo '$nomb est egal a 2';  
			break;
			case 3:    
				echo '$nomb est egal a 3';  
			break;
			default:
				echo '$nomb est inferieur à 1 ou superieur a 3';  
			} 
		?>
<br/>
-----------------------------------------------------------------------------------------
</p>
<p>
	Do While <br/>
	$i = 5;<br/>
	do {<br/>
    	echo $i . '<'br'>'; <br/>
    	$i++;<br/>
	} while ($i<=4);<br/><br/>Résultat : <br/>
	<?php
		$i = 5; //5
		do {
		  	echo $i . '<br />';
		  	$i++;
		} while ($i<=4);
	?>
--------------------------------------------------------------------------------------------
</p>
<p>
	foreach()<br/><br/>
	$a1 = array("un chien","deux chien","trois chien","nous irons au bois chien");<br/>
	foreach($a1 as $cle => $val)<br/>
	{<br/>
	 echo "$cle : $val <'br/>";<br/>
	} <br/><br/>Résultat : <br/>
	<?php
		$a1 = array("un chien","deux chien","trois chien","nous irons au bois chien");
		foreach($a1 as $cle => $val)
		{
		 echo "$cle : $val <br/>";
		}
	?>
---------------------------------------------------------------------------------------------
</p>
<p>
	sort() et rsort()<br/><br/>
	 $tableau = array(1 => 1, 4, 2);<br/>
	rsort($tableau);<br/>
	while(list($cle,$val) = each($tableau))<br/>
	{<br/>
	 echo "$cle : $val<'br>";<br/>
	}<br/><br/>
	<?php
		 $tableau = array(1 => 1, 4, 2);
		rsort($tableau);
		while(list($cle,$val) = each($tableau))
		{
		 echo "$cle : $val<br>";
		}
	?>
-----------------------------------------------------------------------------------------------
</p>
<p>
	fgets() <br/><br/>
	if (file_exists("Lab3phpFichier.txt"))<br/>
    	$fp = fopen("Lab3phpFichier.txt", "r");<br/>
	else{<br/>
    	echo "Fichier introuvable !<br>Importation stoppée.";<br/>
    	exit();<br/>
	}<br/>
	while (!feof($fp)){ <br/>
    	$ligne = fgets($fp,4096);<br/>
    	$liste = explode("|",$ligne); <br/>
    	$nom = $liste[0];<br/>
    	$email = $liste[1];<br/>
    	echo "$nom : $email<'br>";<br/>
	}<br/>
	fclose($fp); <br/><br/>Résultat : <br/>

	<?php
		if (file_exists("Lab3phpFichier.txt"))
		  	$fp = fopen("Lab3phpFichier.txt", "r");
		else{
		  	echo "Fichier introuvable !<br>Importation stoppée.";
		  	exit();
		}
		while (!feof($fp)){ 
		  	$ligne = fgets($fp,4096);
		  	$liste = explode("|",$ligne); 
		  	$nom = $liste[0];
		  	$email = $liste[1];
		  	echo "$nom : $email<br>";
		}	
		fclose($fp); 
	?>
-------------------------------------------------------------------------------------------
</p>
	</body>
</html>
