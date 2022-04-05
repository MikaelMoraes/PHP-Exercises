<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Teste PHP</h1>
	<?php
	$t = isset($_GET["text"])?$_GET["text"]:0;
	echo str_repeat("$t</br>", 5);
	?>
	<a href="5 nomes.php">voltar</a>

</body>
</html>