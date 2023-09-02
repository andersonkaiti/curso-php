<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        // ele junta as string de cada posição do vetor em uma só string e adiciona algo entre elas
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $texto = implode("#", $vetor);
        $textoj = join(" ", $vetor);
        print($texto."<br>");
        print($textoj);
    ?>
</body>
</html>