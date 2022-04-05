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
	$n = isset($_GET["num"])?$_GET["num"]:0;
	while ($n % 10 != 0) {
		echo " $n ";
		$n++;
	}
	echo " $n "
	?>
	<a href="index.php">voltar</a>

</body>
</html>