<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
    $num = $_POST['num'];
    echo "O número escolhido foi $num! <br>";
    echo "O sucessor de $num é ". ($num+1)."!<br>";
    echo "O antecessor de $num é ". ($num-1)."!<br>";
    ?>
    <p>
        <a href="javascript:history.go(-1)">Voltar para pagina inicial</a>
    </p>
</body>
</html>