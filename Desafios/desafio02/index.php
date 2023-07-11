<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório</title>
</head>
<body>    
    <section>
        <div class="header">
            <h1>Informe um número</h1>
        </div>
        <?php 
    if(isset($_POST['gerar'])){
        
        $numAl = rand(0,100);
        echo "<p>Número aleatório gerado: <bold>". $numAl. "</bold> </p>";

    }
    ?>
        <form method="post">
            <input type="submit" name="gerar" value="Gerar">
        </form>
    </section>
</body>
</html>