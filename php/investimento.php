<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/mul.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->

    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<body style="background-image: linear-gradient(to right,rgb(167, 121, 18),rgb(0, 0, 0))">  <!-- cor na pagina-->

<form action="" method="POST">

    <a href=../index.html> <img src="../img/logo.png" alt="logo calculadora" id="logo"> </a>   <!--nome calculator--> 
    <img src="../img/calculadora.png" alt="calculadora" id="calculadora">   <!--icone da calculadora-->

    <div>
        <p>veja tambem:</p>   <!-- outras funcionalidade do site -->

    </div>

    <h3>Investimento é qualquer valor capar de gerar lucro com prazos curtos, médios e longos. O investimento varia muito dado o objetivo a ser alcançado, seja a curto prazo  para servir como uma reserva de emergência. Seja a médio prazo para uma viajem ou casamento. E até mesmo a longom prazo, como a aposentadoria por exemplo.<br/>
    Deve ser levado em consideração a CDI (taxa de referência de juros no Brasil que é frequentemente usada em investimentos.)<br/>
    A inflação (A inflação afeta o poder de compra do dinheiro ao longo do tempo).<br/>
    Os impostos (Dependendo do tipo de investimento, podem haver impostos a serem pagos sobre os rendimentos.)<br/>
    Prazo de investimento (período pelo qual você deseja manter o investimento é importante para calcular os rendimentos ao longo do tempo).<br/>
    E o principal, que é o valor investido (O valor inicial que você está investindo).<br/>
    Eis a fórmula: VF = VI * (1 + CDI - Inflação)^n * (1 - Imposto) <br/>
    De modo que: VF (Valor final), VI (Valor inicial), CDI (Taxa de rendimento, em porcentagem),<br/>Inflação (Taxa de inflação, em porcentagem), N (Período do investimento) e Imposto (Taxa sobre o rendimento, em porcentagem).<br/>
    <!--informações da pagina-->

    <div>   
    <h4>   <!-- tamanho do texto-->
        Valor inicial do investimento: <input type="number" name="valor" id="c1" >  <!--valor inicial do juros, c1=caixa entrada-->
        Valor investido por mês: <input type="number" name="cdi" id="c2"> <!--taxa de juros, c2=caixa entrada-->
        Tempo investido em meses:  <input type="number" name="tempo" id="c3" > <!--numero de meses dos juros, c3=caixa entrada-->
    </h4>   <!-- tamanho do texto-->

     <input type="submit" value="enviar" id="botão1">  <!--Botão de enviar-->
    </div> 

<footer>
    <div id="footer-content">
        <div id="footer-criador">
            <p>PDV-Prime devs <br>©2023 - <b>PDV - Suporte</b></p>
        </div>
        <div id="footer-redessociais">
            <a href="https://github.com/Italo3669/CALCULADORA"> <img src="img/logogithub.png" alt="github" id="githubp"> </a> <br> <p>Github</p>
        </div>
    </div>
</footer>

</form>

</body>

</html>

<?php
$valor = isset ($_POST["valor"]) ? floatval($_POST["valor"]) :0;
$cdi = isset ($_POST["cdi"]) ? floatval($_POST["cdi"]) :0;
$tempo = isset ($_POST["tempo"]) ? floatval($_POST["tempo"]) :0;

if ($valor != 0 && $cdi != 0 && $tempo != 0) {
    $cdi1 = $valor + ($cdi * $tempo);
    $imposto = 56/100 * $cdi1 ;
    $resultado = ($cdi1 - $imposto) / 12;
    $resultado1 = $resultado + $cdi1;
echo "Valor Inicial: $cdi1<br/>";    
echo "Lucro obtido: $resultado<br/>";
echo "Valor final investido: $resultado1";
}

else {
    echo "Preencha os campos corretamente";
}


?>
