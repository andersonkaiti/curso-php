<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $p = "Leite";
        $pr = 4.5;
        echo "O $p custa R$ ". number_format($pr, 2, ",", ".").".<br>";
        // printf: com formatação
        printf("O %s custa R$ %.2f.", $p, $pr);
        // %d valor decimal (positivo ou negativo)
        // %u valor decimal sem sinal (apenas positivos)
        // %f valor real
        // %s string
    ?>
</body>
</html>