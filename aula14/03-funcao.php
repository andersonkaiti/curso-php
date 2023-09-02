<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        function soma () {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for($i = 0; $i < $t; $i++) {
                $s += $p[$i];
            }
            return $s;
        }

        $r = soma(3, 5, 2, 8, 9, 4);
        echo "A soma dos valores é $r.";

        function mult (...$p) {
            $t = func_num_args();
            $m = 1;
            for($i = 0; $i < $t; $i++) {
                $m *= $p[$i];
            }
            return $m;
        }

        $r = mult(2, 5, 10);
        echo "<br>A multiplicação dos valores é $r.";
    ?>
</body>
</html>