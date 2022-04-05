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
        $primeiradata  = new DateTime($_GET["date1"]);
        $segundadata = new DateTime($_GET["date2"]);
        $i = $primeiradata->diff($segundadata);
        echo  $i->m." mês "; 
        echo "\n";
        ?>
        <a href="data-form.php">voltar</a>
    </pre>
</body>
</html>