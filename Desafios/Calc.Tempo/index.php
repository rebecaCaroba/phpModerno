<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <main>
        <h1>Insira os dados</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="container">
            <label for="seg">Insira os segundos totais:</label>
            <input type="number" name="seg" id="idseg">
        </div>
        <input type="submit" class="botao" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php 
        
        ?>
    </section>
</body>
</html>