<?php

    $nome = 'Sono Francesco e vivo in Toscana in mezzo ai lupi';
    $lunghezza = strlen($nome);
    $badword = $_GET['parola']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
<h1><?php echo $nome ?></h1>
<h1><?php echo $lunghezza ?></h1>

<h2>
    <?php echo $badword ?>
</h2>

<h1><?php echo str_replace($badword, '***', strtolower($nome)) ?></h1>

</body>
</html>