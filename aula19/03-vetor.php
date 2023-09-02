<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <pre>
    <?php
        $v = array("A","J", "M", "X", "K");
        print_r($v);
        array_shift($v);
        // array_unshift($v, "O");
        print_r($v);
    ?>
    </pre>
</body>
</html>