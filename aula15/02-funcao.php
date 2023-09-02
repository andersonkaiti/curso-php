<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        // utilizar o include faz o código ser interpretado até o fim e os erros serão exibidos (e se ele for utilizado duas vezes, o arquivo será incluído duas vezes)
        // include "funcoes2.php";
        
        // utilizar require faz com que o código, caso não haja o arquivo, não seja interpretado, não carregue
        // require "funcoes2.php";

        // ao contrário do include, que, ao incluir duas vezes, o arquivo também será incluído duas vezes, o include_once apenas inclui o arquivo uma vez, mesmo se o comando for declarado duas vezes
        include_once("funcoes.php");

        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando programa...</h2>";
    ?>
</body>
</html>