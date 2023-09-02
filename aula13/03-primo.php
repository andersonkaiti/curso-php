<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
        echo "<h1>Analisando o número $numero...</h1>";
        echo "Valores múltiplos:";
        $cont = 0;
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                echo " $i";
                $cont++;
            }   
        }
        echo "<p>Total de múltiplos: $cont</p>";
        if ($cont == 2) {
            echo "Resultado: É PRIMO!";
        } else {
            echo "Resultado: $numero NÃO É PRIMO!";
        }
    ?>
</body>
</html>