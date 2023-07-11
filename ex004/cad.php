<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        $nome = isset($_GET['nome'])?$_GET['nome']:"Não informado";
        $snome = $_GET['sobrenome'] ?? 'Desconhecido';

        echo "<p>É um prazer te conhecer, $nome $snome. Este é meu site</p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
    </main>
</body>
</html>