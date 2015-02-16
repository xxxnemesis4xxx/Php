<html>
	<?php
		header('Content-Type: text/html; charset=utf-8');
		setlocale(LC_ALL, 'fr_CA');
	?>
	<head>
		<title>Clonage</title>
	</head>
	<body>
<?php

$file = fopen ("http://meteo.gc.ca/city/pages/qc-78_metric_f.html", "r");
//$file = fopen ("meteodoc2.html", "r");
if (!$file) {
   echo "<p>Impossible de lire la page météo!!!\n";
   exit;
}
while (!feof ($file)) {
   $line = fgets ($file, 1024);
   if (preg_match ("/(.*)Prévisions détaillées(.*)/", $line, $out)) {   //if (eregi ("Mauricie(.*)", $line, $out)) {
	echo "<B>Voici la meteo pour aujourd'hui sur Environnement Canada:<A HREF='http://meteo.gc.ca/city/pages/qc-78_metric_f.html' target='_blank'> Lien:</A><P></B>";
	
		while($line = fgets ($file, 1024)) {
		if (preg_match ('/(.*)<span class="visible-xs">(.*)&nbsp;février<\/span>/', $line, $out)) {
		$trans = get_html_translation_table(HTML_ENTITIES);
		$line = strtr($out[2], $trans);
		echo $line."<P><HR>";
		}
		if (preg_match ('/(.*)<p class="mrgn-lft-lg mrgn-bttm-0">(.*)<\/p>/', $line, $out)) {
		$trans = get_html_translation_table(HTML_ENTITIES);
		$line = strtr($out[2], $trans);
		echo $line."<P><HR>";
		}
	}
   break;
   }
}
fclose($file);
?>

<br/><br/><br/>
<?php
$file = fopen ("http://www.lapresse.ca/", "r");
if (!$file) {
   echo "<p>Impossible de lire la page météo!!!\n";
   exit;
}
while (!feof ($file)) {
   $line = fgets ($file, 1024);
   if (preg_match ("/(.*)maincontent(.*)/", $line, $out)) {
			echo "<B>Voici les nouvelles sur Lapresse:<A HREF='http://www.lapresse.ca/' target='_blank'> Lien:</A><P></B>";
	
		for ($x=0;$x<2500;$x++){
			$line = fgets ($file, 1024);
			if (preg_match('/(.*)title="(.*)"(.*)><\/h4>/', $line, $out)) {
					$trans = get_html_translation_table(HTML_ENTITIES);
					$line = strtr($out[2], $trans);
					echo $line."<P><HR>";
			}
	  }
   break;
   }
}
fclose($file);
?>


	</body>
</html>
