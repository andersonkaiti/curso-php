<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        // pegará cada letra da string e colocará cada uma em uma posição de um vetor
        $nome = "Anderson";
        $vetor = str_split($nome);
        print_r($vetor);
    ?>
</body>
</html>