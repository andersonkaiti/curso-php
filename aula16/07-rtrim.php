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
        echo("O nome com espaços no início e depois tem ".strlen($nome).".<br>");
        $novo = rtrim($nome);
        echo("O nome com espaços no início mas sem no final tem ".strlen($novo)." caracteres.");
    ?>
</body>
</html>