<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Calculando sua idade</title>
</head>
<body>
    <?php
    $data = date('Y'); 
    $nasc = $_POST['nasc'] ?? 0;
    $ano = $_POST['ano'] ?? $data;
    ?>
    <main>
        <h1>Informe os dados:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div class="container">
                <label for="nasc">Em que ano você nasceu?</label>
                <input type="number" name="nasc" id="idnasc" value="<?=$nasc?>">
            </div>
            <div class="container">
                <label for="ano">Quer saber a sua idada em que ano?(ano atual: <b><?=$data?></b>)</label>
                <input type="number" name="ano" id="idano" value="<?=$ano?>">
            </div>
            <input type="submit" class="botao" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado:</h1>
        <?php 
            if(empty($nasc) || empty($ano)){
                echo "Por favor, preencha os dados corretamente";
                return;
            }

            if($nasc > $ano){
                echo "O ano que você nasceu não pode ser maior que o ano informado!";
                return;
            }

            $idadeAtual = $ano-$nasc;

            echo "Quem nasceu em $nasc vai ter $idadeAtual anos em $ano";
        ?>
    </section>
</body>
</html>