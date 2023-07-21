<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Calculando sua idade</title>
</head>
<body>
    <main>
        <h1>Informe os dados:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div class="container">
                <label for="idade">Em que ano você nasceu?</label>
                <input type="number" name="idade" id="idIdade">
            </div>
            <div class="container">
                <label for="ano">Quer saber a sua idada em que ano?(ano atual:)</label>
                <input type="number" name="ano" id="idano">
            </div>
            <input type="submit" class="botao" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado:</h1>
    </section>
</body>
</html>