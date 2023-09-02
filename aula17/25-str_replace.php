<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $frase = "Gosto de estudar Matemática! Matemática é muito legal.";
        $novaFrase = str_replace("Matemática", "PHP", $frase);
        echo "$novaFrase";

        $frase2 = "Gosto de estudar História!";
        $novaFrase2 = str_ireplace("historia", "PHP", $frase2);
        echo "<br>$novaFrase2";
    ?>
</body>
</html>