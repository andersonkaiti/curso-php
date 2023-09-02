<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $nome = "   Anderson Kaiti   ";
        echo($nome."<br>");
        echo("O nome com os espaços tem ".strlen($nome)." caracteres.<br>");
        $novo = trim($nome);
        echo($novo."<br>");
        echo("O nome sem os espaço no começo e no final tem ".strlen($novo)." caracteres.<br>");
    ?>
</body>
</html>