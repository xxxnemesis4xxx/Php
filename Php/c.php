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
		<?php
			$_SESSION['session'] = $_REQUEST['prenom'] . " " . $_REQUEST['nom'];
		?>
		<p>
			Je vous remercie d'être venu sur notre site internet <?php echo $_REQUEST['prenom'] . " " .$_REQUEST['nom']; ?>
		</p>
		<a href="d.php">Page suivante</a>
	</body>
</html>
