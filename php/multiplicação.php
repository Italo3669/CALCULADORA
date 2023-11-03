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
    <div>
        <h3>A multiplicação é uma operação matemática fundamental que envolve uma combinação de dois ou mais números para determinar um valor, valor esse que chamamos de produto. Seu objetivo é fazer com que as contas sejam executadas de maneira mais rápida e possibilite trabalhar com a repetição de números.<br>
        Usa - se <b>" * "," . " e " X "</b> como sinais de multiplicação.<br>
        Antes se calculava<b> "4 + 4 + 4 = 12"</b>, entretanto, com a multiplicação passamos a calcular da seguinte maneira: o número desejado repetido pela quantidade de vez indicada.<br>
        Exemplo: 4 (número) x 3 (repetição) = 12 (produto) </h3> <!--informações da pagina-->
    </div>

    <div>   
     <h4>   
        Insira seu número: <input type="number" name="mul1" placeholder="*" id="inserir1">   <!--caixa de resposta da Multiplicação-->
        a quantidade: <input type="number" name="mul2" id="inserir2"><br> <!--caixa de resposta da multiplicação-->
     </h4>
     <input type="submit" value="enviar" id="botão1">  <!--Botão de enviar-->
    </div> 

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

$mul1 = isset ($_POST["mul1"]) ? floatval($_POST["mul1"]) :0;
$mul2 = isset ($_POST["mul2"]) ? floatval($_POST["mul2"]) :0;


if ($mul1 != 0 && $mul2 != 0 ){
    $resultado = $mul1 * $mul2;
echo "Resultado: $resultado";
}

else {
    echo "Preencha os campos corretamente";
}
?>