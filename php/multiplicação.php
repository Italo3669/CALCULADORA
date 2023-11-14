<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/mul.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->

    <style>
        a {
            text-decoration: none;
            color: black;
        } 
    </style> <!-- Estilização de links -->

    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<body style="background-image: linear-gradient(to right,rgb(57, 91, 56),rgb(30, 107, 81))"> <!-- Cor de fundo da página -->

<form action="" method="POST">

<div class="cabeçalho2"> <!--Cabeçalho da página !-->
        <a href=../index.html> <img src="../img/logo.png" alt="logo calculadora" id="logo2"> </a>   <!--nome calculator--> 
        <p id="veja-tambem">veja também:</p>   <!-- outras funcionalidade do site -->
        
        <div class="containerlista"> 
            <div class="row">
                <a class="texto" href="../php/porcentagem.php"> Porcentagem</a> <br>
                <a class="texto" href="../php/subtração.php"> Subtração</a> <br>
            </div>
        </div>
    </div>

    <h1 id="mul">MULTIPLICAÇÃO</h1>

    <div>   
     <h4>   
        Insira seu número: <input type="number" name="mul1" placeholder="*" id="inserir1">   <!--caixa de resposta da Multiplicação-->
        a quantidade: <input type="number" name="mul2" id="inserir2"><br> <!--caixa de resposta da multiplicação-->
     </h4>
     <input type="submit" value="enviar" id="botao1">  <!--Botão de enviar-->
    </div> <br>

<?php

    $mul1 = isset ($_POST["mul1"]) ? floatval($_POST["mul1"]) :0;
    $mul2 = isset ($_POST["mul2"]) ? floatval($_POST["mul2"]) :0;


    if ($mul1 != 0 && $mul2 != 0 ){
    $resultado = $mul1 * $mul2;

    echo '<div class="resultado">';    
    echo "Resultado: $resultado";
    echo '</div>';
    }

    else {
        echo '<div class="else">';
        echo "Preencha os campos corretamente";
        echo '</div>';

    }
?>    

    <div class="conteudo">
        <h3>A multiplicação é uma operação matemática fundamental que envolve uma combinação de dois ou mais números para determinar um valor, valor esse que chamamos de produto. Seu objetivo é fazer com que as contas sejam executadas de maneira mais rápida e possibilite trabalhar com a repetição de números.<br>
        Usa - se <b>" * "," . " e " X "</b> como sinais de multiplicação.<br>
        Antes se calculava<b> "4 + 4 + 4 = 12"</b>, entretanto, com a multiplicação passamos a calcular da seguinte maneira: o número desejado repetido pela quantidade de vez indicada.<br>
        Exemplo: 4 (número) x 3 (repetição) = 12 (produto) </h3> <!--informações da pagina-->
    </div>

    <img src="../img/equacaologo.png" alt="calculadora" id="equacao">   <!--icone da equação-->
    
    <div class="containerrodape">
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
    </div>

</form>

</body>

</html>