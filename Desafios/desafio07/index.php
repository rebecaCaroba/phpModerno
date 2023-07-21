<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Calculadora de Médias</title>
</head>
<body>
    <?php 
        $v1=$_POST['v1'] ?? 0;
        $v2=$_POST['v2'] ?? 0;
        $p1=$_POST['peso1'] ?? 1;
        $p2=$_POST['peso2'] ?? 1;
    ?>
    <main>
        <h1>Informe os valores a seguir:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="container">
            <label for="v1">1ºValor</label>
            <input type="number" name="v1" id="idv1" value="<?=$v1?>">
        </div>
        <div class="container">
            <label for="peso1">1ºPeso</label>
            <input type="number" name="peso1" id="idpeso1" value="<?=$p1?>">
        </div>
        <div class="container">
            <label for="v2">2ºValor</label>
            <input type="number" name="v2" id="idv2" value="<?=$v2?>">
        </div>
        <div class="container">
            <label for="peso2">2ºPeso</label>
            <input type="number" name="peso2" id="idpeso2" value="<?=$p2?>">
        </div>
        <input type="submit" class="botao" value="Calcular">
    </form>
    </main>
    <section>
        <h1>Resultado:</h1>
        <?php 
            

        ?>
    </section>
</body>
</html>