<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Teste de primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binario 0 = octal 
    $num = 0x1A;
    $num2 = 0b1110;
    echo "O valar da variavel é $num <br>"; 
    echo "O valar da variavel é $num2"; 

    $v = 300.2;
    // Funcão que define e despeja na tela todas as info que tem a variavel
    var_dump($v);

    ?>
</body>
</html>