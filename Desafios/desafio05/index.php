<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Salário Mínimo</title>
</head>
<body>
    <?php 
        $sal = $_POST['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário mínimo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="container">
            <label for="sal">Salário em (R$)</label>
            <input type="number" name="sal" id="idsal" value="<?=$sal?>" placeholder="ex. 5000" step="0.01">
        </div>
        <input type="submit" class="botao" value="Verificar">
    </form>
    </main>
    <section style="display: block;">
    <?php 
        if($sal <= 0){
            echo "Digite um número maior que zero!";
            return;
        }

        $total = intdiv($sal, 1380);
        $res = $sal % 1380;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    ?>
        <h1>Resultado:</h1>
        <span><?= "Quem recebe um salario de ".numfmt_format_currency($padrao, $sal, "BRL").", ganha $total salários mínimos +".numfmt_format_currency($padrao, $res, "BRL")."." ?></span>
        <br><br>
        <b>Considerando o salário mínimo de R$1380,00</b>
    </section>
</body>
</html>