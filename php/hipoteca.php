<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/hip.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->
    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<body style="background-image: linear-gradient(to right,rgb(167, 121, 18),rgb(0, 0, 0))">  <!-- cor na pagina-->

<form action="" method="POST">

    <div class="cabeçalho2">
        <a href=../index.html> <img src="../img/logo.png" alt="logo calculadora" id="logo2"> </a>   <!--nome calculator--> 
    </div>  
    <img src="../img/calculadora.png" alt="calculadora" id="calculadora" id=inserir2>   <!--icone da calculadora-->

    <div>
        <p>veja tambem:</p>   <!-- outras funcionalidade do site -->

    </div>
    <h3>
    Uma hipoteca é um tipo de empréstimo garantido por um bem imóvel, como uma casa ou um terreno. Ela é normalmente usada para financiar a compra de propriedades. Quando você obtém uma hipoteca, está essencialmente pegando dinheiro emprestado de um credor (geralmente um banco ou uma instituição financeira) para comprar a propriedade, e o imóvel em si é usado como garantia para o empréstimo.<br/>
    Se você gosta de filmes norte - americanos já ouviu muito a expressão: "E, você lembrou de pagar a hipoteca?".<br/>
    Entretanto, no Brasil, muitos bancos pararam de trabalhar com essa modalidade. Uma vez que tem muitas barreiras legais,<br/>fator que torna essa operação muito inneficiente e pouco rentável para as grandes instituições financeiras.<br/>
    O calculo é feito usando a formula M = P [ r(1 + i)^r ] / [ (1 + r)^n – 1], acompanhe abaixo a nommeação:<br/>
    M = é o pagamento mensal da hipoteca.<br/>
    P = o valor do empréstimo.<br/>
    R = é a taxa de juros mensais (a taxa de juros anual dividida por 12 meses e convertida para uma forma decimal).<br/>
    N = é o número total de prestações mensais (geralmente o número de anos do empréstimo multiplicado por 12).<br/>
    </h3>

    <h4>   <!-- tamanho do texto-->
        Valor do empréstimo: <input type="number" name="valor" id="c1" >  <!--valor inicial do juros, c1=caixa entrada-->
        Taxa de juros anual: <input type="number" name="taxa" id="c2"> <!--taxa de juros, c2=caixa entrada-->
        Quantidade de anos:  <input type="number" name="ano" id="c3" > <!--numero de meses dos juros, c3=caixa entrada-->
    </h4>   <!-- tamanho do texto-->

    <input type="submit" value="enviar" id="botão1">  <!--Botão de enviar-->



    
    <footer> <!-- Rodapé -->
        <div id="footer-content"> <!-- Conteúdo do rodapé -->
            <div id="footer-criador"> <!-- Separação do conteúdo (Criadores) -->
                <p>PDV-Prime devs <br>©2023 - <b>PDV - Suporte</b></p>
            </div>
            <div id="footer-redessociais"> <!-- Separação do conteúdo (Redes Sociais) -->
                <a href="https://github.com/Italo3669/CALCULADORA"> <img src="../img/logogithub.png" alt="github" id="githubp"> </a>
            </div>
        </div> <!-- Fechamento do Conteúdo do rodapé-->
    </footer> <!-- Fechamento do Rodapé -->


</form>

</body>

</html>

<?php

$valor = isset ($_POST["valor"]) ? floatval($_POST["valor"]) :0;
$taxa = isset ($_POST["taxa"]) ? floatval($_POST["taxa"]) :0;
$ano = isset ($_POST["ano"]) ? floatval($_POST["ano"]) :0;

if ($valor != 0 && $taxa != 0 && $ano != 0 ){
    $taxa1 = ($taxa / 12) / 10;
    $ano1 = $ano * 12;
    $resultado = ($valor * ($taxa1 * (1 + $taxa1)**$ano1)) / ((1 + $taxa1)**$ano1 - 1);
    
echo "Pagamento mensal da hipoteca: $resultado";
}

else {
    echo "Preencha os campos corretamente";
}
?>