<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/jur.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->

    <style>
        a {
            text-decoration: none;
            color: black;
        } 
    </style> <!-- Estilização de links -->

    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<form action="" method="POST">

<body style="background-image: linear-gradient(to right,rgb(57, 91, 56),rgb(30, 107, 81))"> <!-- Cor de fundo da página -->

<div class="cabeçalho2"> <!--Cabeçalho da página !-->
        <a href=../index.html> <img src="../img/logo.png" alt="logo calculadora" id="logo2"> </a>   <!--nome calculator--> 
        <p id="veja-tambem">veja também:</p>   <!-- outras funcionalidade do site -->
        
        <div class="containerlista"> 
            <div class="row">
                <a class="texto" href="../php/multiplicação.php"> Multiplicação</a> <br>
                <a class="texto" href="../php/divisao.php"> Divisão</a> <br>
            </div>
        </div>
    </div>

    <h1 id="juross">JUROS SIMPLES</h1> 

    <div>
     <h4 id="inserir">   <!-- tamanho do texto-->
        Valor inicial:<input type="number" name="v1" id="inserir1" >  <!--valor inicial do juros, c1=caixa entrada-->
        Taxa de Juros: <input type="number" name="t2" id="inserir2"> <!--taxa de juros, c2=caixa entrada-->
        N° de meses:  <input type="number" name="n3" id="inserir3" > <!--numero de meses dos juros, c3=caixa entrada-->
    </h4>   <!-- tamanho do texto-->
        
       <input type="submit" value="enviar" id="botao1" >  <!--Botão de enviar-->
    </div> <br>

<?php

    $v1 = isset($_POST['v1']) ? floatval($_POST['v1']) : 0;
    $t2 = isset($_POST['t2']) ? floatval($_POST['t2']) : 0;
    $n3 = isset($_POST['n3']) ? floatval($_POST['n3']) : 0;

    if ($v1 != 0 && $t2 != 0 && $n3 != 0) {
        $taxa = $t2 / 100;
        $resultado = $v1 * $taxa * $n3;
        $total = $v1 + $resultado; 

        echo '<div class = "resultado">';
        echo "Valor inicial:R$$v1";
        echo "Juros:R$$resultado";
        echo "Valor final:R$$total";
        echo '</div>';

    } 
    else {
        echo '<div class="else">';
        echo "Preencha os campos corretamente";
        echo '</div>';
    }

?>

    <div class="conteudo">
        <h4>
        Os juros simples são uma forma de cálculo de juros em que os juros são calculados apenas sobre o valor principal do empréstimo ou investimento durante todo o período de tempo. Nesse sistema, os juros não são reinvestidos nem capitalizados ao longo do tempo. Isso significa que os juros são calculados sempre com base no valor inicial do principal, sem levar em consideração os juros acumulados anteriormente.
        <br>
        Por exemplo, calcula - se:<br>
        1000 (Valor inicial) * 2 (Taxa de juros) * 4 (Número de meses) = 1080 (Valor total = Valor inicial + Juros)
        </h4>
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






