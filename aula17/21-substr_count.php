<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP.";
        $cont = substr_count($frase, "PHP");
        echo "$frase<br>PHP encontrado ".$cont." vezes.";
    ?>
</body>
</html>