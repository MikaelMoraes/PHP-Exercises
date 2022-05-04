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
            $i = isset($_GET["idade"])?$_GET["idade"]:0;
                if ( $i >= 18 ) {
                    $i = true;
                    printf("maior de idade, você já pode dirigir");
                    // code...
                }
                else{
                     $i = false;
                    printf("menor de idade, você não pode dirigir");

                }


            ?>
			<a href="idade-form.php">voltar</a>
		</pre>
	</body>
</html>