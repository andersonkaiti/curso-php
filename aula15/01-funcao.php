<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        function teste(&$x) {
            $x += 2;
            echo "O valor de x é $x.";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de a é $a.</p>";
    ?>
</body>
</html>