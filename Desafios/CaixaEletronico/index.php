<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <?php 
    $valor = $_POST['valor'] ?? 0;
    ?>
    <main>
        <h1>Insira os dados</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="container">
            <label for="valor">Qual valor você deseja sacar?</label>
            <input type="number" name="valor" id="idvalor" step="5">
        </div>
        <small>*Notas disponíveis: R$100, R$50, R$10 e R$5</small>
        <input type="submit" class="botao" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
        $total = $valor;

        if($valor <= 0){
            echo "Por favor, preencha os dados corretamente";
            return;
        } 
        $cem = intdiv($total, 100);
        $total = $total % 100;

        $cinq = intdiv($total, 50);
        $total = $total % 50;

        $dez = intdiv($total, 10 );
        $total = $total % 10;

        $cinco = intdiv($total, 5);
        $total = $total % 5;
        ?>
        <h1>Resultado</h1>
        <ul>
            <li>
                <img src="https://www.bcb.gov.br/novasnotas/assets/img/section/100/100_front.jpg" alt="nota de 100" width="200px" height="100px">
                <strong>x<?=$cem?></strong>
            </li>
            <li>
                <img src="https://www.bcb.gov.br/novasnotas/assets/img/section/50/50_front.jpg" alt="nota de 50" width="200px" height="100px">
                <strong>x<?=$cinq?></strong>
                
            </li>
            <li>
                <img src="https://www.bcb.gov.br/novasnotas/assets/img/section/10/10_front.jpg" alt="nota de 10" width="200px" height="100px">
                <strong>x<?=$dez?></strong>

            </li>
            <li>
                <img src="https://www.bcb.gov.br/novasnotas/assets/img/section/5/5_front.jpg" alt="nota de 5" width="200px" height="100px">
                <strong>x<?=$cinco?></strong>

            </li>
        </ul>
    </section>
</body>
</html>