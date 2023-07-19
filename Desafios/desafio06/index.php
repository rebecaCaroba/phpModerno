<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Calculadora de raízes</title>
</head>
<body>
    <?php 
        $num = $_POST['num'] ?? 1;
        $indice = $_POST['indice'] ?? 1;
    ?>
    <main>
        <h1>Informe um Número e o índice</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="container">
            <label for="num">Número</label>
            <input type="number" name="num" id="idnum" placeholder="ex: 112" value="<?= $num?>">
        </div>
        <div class="container">
            <label for="indice">índice</label>
            <input type="number" name="indice" id="idindice" placeholder="ex: 1, 2, 3.." value="<?= $indice?>">
        </div>
        <input type="submit" class="botao" value="Calculcar">
    </form>
    </main>
    <section>
        <h1>Resultado:</h1>
        <?php 

        if($indice <= 0 ){
            echo "O índice precisa ser maior que zero e positivo";
            return;
        }
        
        if($indice == 2){
            $res = sqrt($num);
        }else {
            $res = $num **(1/$indice);
        }        

        echo "<p>A raiz de $num com o índice $indice é: $res</p>";
        ?>
    </section>
</body>
</html>