<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $v = array( "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.5);
        // $v["fuma"] = true;
        foreach($v as $k => $c) {
            echo "O campo $k possui o conteúdo $c.<br>";
        }
    ?>
</body>
</html>