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
        $v = array( 2 => "A",
                    5 => "J",
                    0 => "M",
                    3 => "X",
                    4 => "K");
        // print_r($v);

        // ordena os elementos do vetor
        // sort($v);
        // print_r($v);
        
        // ordena, mas ao contrário
        // rsort($v);
        // print_r($v);

        // ordena, mas os índices continuam para cada elemento, então, mesmo que o 2º elemento vá para a 4ª posição, ele continuará com o índice 2
        // asort($v);
        // print_r($v);

        // ordena ao contrário e os índices continuam para cada elemento
        // arsort($v);
        // print_r($v);

        // ordena os índices
        // ksort($v);
        // print_r($v);

        // ordena os índices ao contrário
        krsort($v);
        print_r($v);
    ?>
    </pre>
</body>
</html>