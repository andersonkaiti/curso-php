<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $nome = "Anderson Kaiti";
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
        $novo1 = str_pad($nome, 30, " ", STR_PAD_LEFT);
        $novo2 = str_pad($nome, 30, " ", STR_PAD_BOTH);
        echo "$novo";
        echo "<br>$novo1";
        echo "<br>$novo2";
    ?>
</body>
</html>