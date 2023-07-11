<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php 

    // Config a area padrao da data.
    date_default_timezone_set("America/Sao_Paulo");
    echo "A data de hoje em números é". date("d/m/y"). "<BR>";
    echo "A data de hoje é ". date('D/M/Y'). "<BR>";
    echo "São". date('G:i:s T');

    
    ?>
</body>
</html>