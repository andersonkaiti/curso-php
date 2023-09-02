<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = pow($n, 3);
                break;
            case 3:
                $r = sqrt($n); // $n ^ (1/2);
        }
        echo "O resultado da operação solicitada foi <span class='foco'>". number_format($r, 2)."</span>.";
    ?>
    <br><a class="botao" href="exercicio-01.html">Voltar</a>
</body>
</html>