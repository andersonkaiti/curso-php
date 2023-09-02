<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        table, td {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        td {
            position: relative;
        }

        td::after {
            content: attr(data-content);
            position: absolute;
            left: 2px;
            top: -16px;
        }
    </style>
</head>
<body>
    <pre>
        <table><tr>
    <?php
        $c = range(5, 20, 2);
        $i = 0;
        foreach($c as $valor) {
            echo "<td data-content='$i'>$valor </td>";
            $i++;
        }
    ?>
        </tr></table>
    </pre>
</body>
</html>