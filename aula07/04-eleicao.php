<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $ano = $_GET["an"];
        $idade = 2023 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        // && para e, || (pipes) para ou e xor para xor.
        $tipo = ($idade > 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
        echo " E dessa forma, seu voto é $tipo.";
    ?>
</body>
</html>