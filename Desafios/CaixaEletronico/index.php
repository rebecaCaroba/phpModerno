<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <main>
        <h1>Insira os dados</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="container">
            <label for="valor">Qual valor você deseja sacar?</label>
            <input type="number" name="valor" id="idvalor">
        </div>
        <small>*Notas disponíveis: R$100, R$50, R$10 e R$5</small>
        <input type="submit" class="botao" value="Sacar">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <ul>
            <li>
                <img src="https://www.bcb.gov.br/novasnotas/assets/img/section/100/100_front.jpg" alt="nota de 100" width="200px" height="100px">
            </li>
            <li>
                <img src="https://www.bcb.gov.br/novasnotas/assets/img/section/50/50_front.jpg" alt="nota de 50" width="200px" height="100px">
            </li>
            <li>
                <img src="https://www.bcb.gov.br/novasnotas/assets/img/section/10/10_front.jpg" alt="nota de 10" width="200px" height="100px">
            </li>
            <li>
                <img src="https://www.bcb.gov.br/novasnotas/assets/img/section/5/5_front.jpg" alt="nota de 5" width="200px" height="100px">
            </li>
        </ul>
    </section>
</body>
</html>