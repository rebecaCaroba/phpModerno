<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Calculando uma divisão</title>
</head>
<body>
    <?php 
    $divid = $_POST['divid'] ?? 0;
    $divis = $_POST['divis'] ?? 0;
    
    ?>

    <main>
        <h1>Calculando uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div class="container">
                <label for="divid">Dividendo</label>
                <input type="number" name="divid" id="idDivid" value="<?=$divid?>">
            </div>
            <div class="container">
                <label for="divis">Divisor</label>
                <input type="number" name="divis" id="idDivis" value="<?=$divis?>">
            </div>
            <input type="submit" class="botao" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Estrutura da divisão</h1>
        <div id="res">
            <?php 
                if($divis == 0 && $divid == 0 || $divis == 0){
                    $quo= 0;
                    $res= 0;
                    echo "<span>Divisão impossível</span>";
                }else{

                    $quo = intdiv($divid, $divis);
                    $res = $divid%$divis;

                }
            ?>
            <div class="restoEDivid">
                <p><?=$divid?></p>
                <p><?=$res?></p>
            </div>
            <div class="quociEDivis">
                <p><?=$divis?></p>
                <p><?=$quo?></p>
            </div>
        </div>
    </section>
</body>
</html>