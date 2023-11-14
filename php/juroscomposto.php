<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/juroscomposto.css"/>   <!--referencia a pasta do CSS-->
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
                <a class="texto" href="../php/hipoteca.php"> Hipoteca</a> <br>
                <a class="texto" href="../php/investimento.php"> Investimento</a> <br>
            </div>
        </div>
    </div>

    <div>

    <h1 id="jurosc">JUROS COMPOSTO</h1>    

     <h4 id="inserir">   <!-- tamanho do texto-->
        Capital: <input type="number" name="cap" id="inserir1" >  <!--valor inicial do juros, c1=caixa entrada-->
        Taxa de Juros: <input type="number" name="tax" id="inserir2"> <!--taxa de juros, c2=caixa entrada-->
        Tempo:  <input type="number" name="tem" id="inserir3" > <!--numero de meses dos juros, c3=caixa entrada-->
    </h4>   <!-- tamanho do texto-->

       <input type="submit" value="enviar" id="botao1">  <!--Botão de enviar-->
    </div> <br>

<?php

    $cap = isset ($_POST["cap"]) ? floatval($_POST["cap"]) :0;
    $tax = isset ($_POST["tax"]) ? floatval($_POST["tax"]) :0;
    $tem = isset ($_POST["tem"]) ? floatval($_POST["tem"]) :0;

    if ($cap != 0 && $tax != 0 && $tem != 0 ){
    $resultado = $cap * (1 + $tax/100)**$tem;
   
    echo '<div class="resultado">';    
    echo "Montante: $resultado";
    echo '</div>';
    }

    else {
        echo '<div class="else">';
        echo "Preencha os campos corretamente";
        echo '</div>';

    }
?>

    <div class="conteudo">
        <h4>   <!-- tamanho do texto-->
        Juros compostos são uma forma de calcular os juros de um investimento ou empréstimo, em que os juros são aplicados<br>não apenas ao valor inicial, mas também aos juros acumulados ao longo do tempo.
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