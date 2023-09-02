<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site);
        // ele procurará pelos espaços e em seguida qual é a string que será explodida dentro de um vetor. Basicamente, ele "fatia" a string para colocá-la em um vetor
        print_r($vetor);
    ?>
</body>
</html>