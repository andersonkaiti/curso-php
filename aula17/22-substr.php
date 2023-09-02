<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);
        $sub1 = substr($site, 6);
        $sub2 = substr($site, -5, 2);
        echo "$sub $sub1<br>$sub2";
    ?>
</body>
</html>