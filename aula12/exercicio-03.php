<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $valor = isset($_GET["valor"]) ? $_GET["valor"] : 1;
        echo "<h1>Mostrando a tabuada do $valor.</h1>";
        $c = 1;
        do {
            echo "$valor x $c = ".($valor * $c)."<br>";
            $c++;
        } while ($c <= 10) 
        // 3 x 1 = 3
    ?>
</body>
</html>