<!DOCTYPE html>
<html lang='it'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href=''>
    <title>Risposta form</title>
</head>
<body>
    <?php
       foreach ($_POST as $key => $value) {
        echo 'Campo : ' . $key . ' Valore : ' . $value . '<br>';
       } 
    ?>
</body>
</html>