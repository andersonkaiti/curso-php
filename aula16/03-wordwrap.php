<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap.";
        // wordwrap(a variável, o tamanho da quebra, o tipo de quebra, true (não corta palavras com um tamanho maior que a quebra) e false (o contrário de true))
        $r = wordwrap($t, 5, "<br>\n", false);
        echo $r;
    ?>
</body>
</html>