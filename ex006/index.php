<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício VI<?php ?></title>
</head>
<body>
    <?php 
    // Capturando os dados do Formulário Retroalimentado;
    $v1 = floatval($_POST['v1']) ?? 0;
    $v2 = floatval($_POST['v2']) ?? 0;

    ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$v1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2"
            value="<?=$v2?>">
            <input type="submit" value="Somar">
        </form>
    </section>
    <div id="res">
        <h1>Resultado da soma:</h1>
        <?php 
            $soma = $v1 + $v2;
            echo "<p>O resultado da soma é: $soma</p>";
        ?>
    </div>
</body>
</html>