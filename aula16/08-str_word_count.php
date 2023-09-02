<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $frase = "Eu vou estudar PHP agora";
        // 0: conta as palavras, 1: criará um vetor em que cada posição conterá uma palavra, 2: também criará um vetor, mas os índices indicam em qual posição as letras de cada palavra começam
        $cont = str_word_count($frase, 2);
        print_r($cont);
    ?>
</body>
</html>