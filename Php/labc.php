<html>
<head>
<title>Site en php </title>
</head>
<body>
<?php echo $_SERVER['HTTP_USER_AGENT']; ?>
<br/><br/>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
Print("Nous sommes le $date et il est $heure");
?>

<br/><br/>
<?php include("adresse.txt"); ?>
<br/>
<br/>
<br/>

<?php
$filename = 'adresse.txt';
echo "la date de dernière modification du fichier $filename " . date("F d Y H:i:s.", filemtime($filename));
?>
<br/><br/>
<?php echo "L'adresse ip du serveur : " . $_SERVER['SERVER_ADDR']; ?>
</body>
</html>
