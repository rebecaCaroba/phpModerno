<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda</title>
</head>
<body>
    <?php 
        $valor = $_GET['valor'];
        $res = $valor * 4.80;

        echo "<main>";
        echo "Seus R$ $valor equivalem a <b>US$ $res</b><br>";
        echo "Cotaçao fixa de R$4.80 informada diretamente do código</main>";
    ?>  
</body>
</html>