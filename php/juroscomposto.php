<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/juroscomposto.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->
    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<form action="" method="POST">

<body style="background-image: linear-gradient(to right,rgb(167, 121, 18),rgb(0, 0, 0))">  <!-- cor na pagina-->

    <a href=../index.html> <img src="../img/logo.png" alt="logo calculadora" id="logo"> </a>   <!--nome calculator--> 
    <img src="../img/calculadora.png" alt="calculadora" id="calculadora">   <!--icone da calculadora-->

    <div>
        <p>veja tambem:</p>   <!-- outras funcionalidade do site -->

    </div>

    <div>

     <h4>   <!-- tamanho do texto-->
    Juros compostos são uma forma de calcular os juros de um investimento ou empréstimo, em que os juros são aplicados não apenas ao valor inicial, mas também aos juros acumulados ao longo do tempo.<br/>
    A principal diferença entre juros  composto e juros simples é:<br/>
    Juros simples: incidem apenas sobre o valor inicial (capital)<br/>
    Juros compostos: incidem sobre o montante total (capital mais juros acumulados).<br/>
    Sua  fórmula é: <b>M = C * (1 + i/100)^t</b>  
    Juros compostos: incidem sobre o montante total (capital mais juros acumulados).<br/>
    M = montante final<br/>
    C = capital<br/>
    i = taxa de juros<br/>
    t = tempo
     </h4>

     <h4>   <!-- tamanho do texto-->
        Capital: <input type="number" name="cap" id="c1" >  <!--valor inicial do juros, c1=caixa entrada-->
        Taxa de Juros: <input type="number" name="tax" id="c2"> <!--taxa de juros, c2=caixa entrada-->
        Tempo:  <input type="number" name="tem" id="c3" > <!--numero de meses dos juros, c3=caixa entrada-->
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

$cap = isset ($_POST["cap"]) ? floatval($_POST["cap"]) :0;
$tax = isset ($_POST["tax"]) ? floatval($_POST["tax"]) :0;
$tem = isset ($_POST["tem"]) ? floatval($_POST["tem"]) :0;

if ($cap != 0 && $tax != 0 && $tem != 0 ){
    $resultado = $cap * (1 + $tax/100)**$tem;
echo "Montante: $resultado";
}

else {
    echo "Preencha os campos corretamente";
}
?>