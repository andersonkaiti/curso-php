<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        function soma ($a, $b) {
            $s = $a + $b;
            echo "<p>$s</p>";
        }

        soma(3, 4);
        soma(8, 2);
        $x = 9;
        $y = 15;
        soma($x, $y);
    ?>
</body>
</html>