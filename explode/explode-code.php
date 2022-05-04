<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Teste PHP</h1>
	<pre>
	<?php
	$t = isset($_GET["text"])?$_GET["text"]:0;;
	$t=strtoupper($t);
	print_r(explode(" ", $t));
	?>
	
	<a href="explode-form.php">voltar</a>

	</pre>

</body>
</html>