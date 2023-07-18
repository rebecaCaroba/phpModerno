<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="./estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda</title>
</head>

<body>
    <section>
        <?php
        //Cotação via API
        date_default_timezone_set("America/Sao_Paulo");
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $final = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $final . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        //Funçao de tratar dados em JSON
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados['value'][0]['cotacaoCompra'];
        $real = floatval($_POST["valor"]) ?? 0;

        //Equivalencia em dolar
        $dolar = $real / $cotacao;

        //Mostrar resultado
        // Formataçao de moedas internacional

        //Bublioteca intl (Internalization PHP)
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<span>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong> <br><br></span>";

        // echo "Seus R$".number_format($real, 2, "," , ".")." equivalem a US$".number_format($dolar, 2, ",",".")."<br><br>";
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar a página anterior</a>
    </section>
</body>

</html>