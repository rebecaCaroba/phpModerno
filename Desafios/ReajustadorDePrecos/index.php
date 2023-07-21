<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Reajustador de Preços</title>
</head>
<body>
    <?php 
    $num = $_POST['num'] ?? 0;
    $perc = $_POST['perc'] ?? 0;
    ?>
    <main>
        <h1>Informe os valores:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" 
        method="post">
        <div class="container">
            <label for="num">Preço do produto(R$)</label>
            <input type="number" name="num" id="idnum">
        </div>
        <div class="conatiner">
            <label for="perc">Qual será o percentual do reajuste <b class="valor_b"></b>?</label><br>
            <input type="range" id="perc" name="perc" min="0" max="100" onchange="pegarDados()">
        </div>
        <input type="submit" class="botao" value="Reajustar">
        </form>
    </main>
    <section>
        <h1>Resultado:</h1>
        <?php 
            // if(empty($num)){
            //     echo "Por favor, preencha os dados corretamente";
            //     return;
            // }

            $res = ($num * ($perc/100))+$num;
            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "O produto que cutava".numfmt_format_currency($padrao, $num, "BRL")." com <b>".$perc."% de aumento</b> vai passar a custar <b>".numfmt_format_currency($padrao,$res, "BRL")."</b> a partir de agora!";
        ?>
    </section>
    <script src="script.js"></script>
</body>
</html>