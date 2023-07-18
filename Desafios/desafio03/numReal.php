<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
    $num = floatval($_GET['numero']) ?? 0;
    //Separando em 3 casas decimais, sendo a "," para casas decimais e o "." para milhar.
    $int = (int) $num;
    $frac = $num - $int;

    echo "Analisando o número ".number_format($num,3, "," ,".")." informado pelo usuário";
    echo "<ul>
    <li>A parte inteira do número é ". number_format($int, 0, ",", ".")."</li>
    <li>A parte fracionária de um número é ". number_format($frac, 3, ",","."). "</li>
    </ul>";
    ?>
</body>
</html>