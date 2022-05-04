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
        $i = date('d/m/Y', strtotime('now'));

        echo "</br> $i </br>";

         $i = date('d/m/Y', strtotime('+5 days', strtotime('now')));
          echo " </br> $i </br>";

           $i = date('d/m/Y', strtotime('+5 days, +3 month', strtotime('now')));
          echo " </br> $i </br>";
        ?>

        <a href="date sub-form.html">voltar</a>
    </pre>
</body>
</html>