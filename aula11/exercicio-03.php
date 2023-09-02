<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 1;
        $fim = isset($_GET["fim"]) ? $_GET["fim"] : 5;
        $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;

        if ($inicio < $fim) {
            while ($inicio <= $fim) {
                echo "$inicio ";
                $inicio += $incremento;
            }
        } else {
            while ($inicio >= $fim) {
                echo "$inicio ";
                $inicio -= $incremento;
            }
        }
    ?>
</body>
</html>