<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
    $seg = $_POST['seg'] ?? 0;

    ?>
    <main>
        <h1>Insira os dados</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="container">
            <label for="seg">Insira os segundos totais:</label>
            <input type="number" name="seg" id="idseg" value="<?=$seg?>">
        </div>
        <input type="submit" class="botao" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado:</h1>
        <?php 
        $total= $seg;
        if($seg <= 0){
            echo "Por favor, preencha os dados corretamente";
            return;
        } 
        $semana = intdiv($total, 604800);
        $total = $total % 604800;

        $dia = intdiv($total, 86400);
        $total = $total % 86400;

        $hora = intdiv($total, 3600 );
        $total = $total % 3600;

        $minuto = intdiv($total, 60);
        $total = $total % 60;

        echo "<p>Analisando o valor que você digitou, ".number_format($seg, 0, ",", ".")." segundos equivalem a um total de:</p>";
        echo "<br>";
        echo "<ul><li>$semana semana(s)</li></ul>";
        echo "<ul><li>$dia dia(s)</li></ul>";
        echo "<ul><li>$hora hora(s)</li></ul>";
        echo "<ul><li>$minuto minuto(s)</li></ul>";
        echo "<ul><li>$total segundo(s)</li></ul>";
        ?>
    </section>
</body>
</html>