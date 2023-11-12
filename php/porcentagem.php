<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/por.css"/>   <!--referencia a pasta do CSS-->
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
                <a class="texto" href="php/divisao.php"> Divisão</a> <br>
                <a class="texto" href="php/hipoteca.php"> Hipoteca</a> <br>
            </div>
        </div>
    </div>

    <h1 id="por">PORCENTAGEM</h1>

    <div id="inserir">
     <h4>   
         quanto é: <input type="number" name="por1" placeholder="%" id="inserir1">   <!--caixa de resposta da porcentagem-->
         de: <input type="number" name="por2" id="inserir2"><br> <!--caixa de resposta da porcentagem-->
     </h4>
     <input type="submit" value="enviar" id="botao1"> <!--Botão de enviar-->
    </div> 

    <div id="inserir34">
        <h4>
            o valor:<input type="number" name="num1" id="inserir3">  <!--caixa de resposta da porcetagem-->
            é qual porcentagem de:<input type="number" name="num2" id="inserir4">  <!--caixa de resposta da porcentagem-->
        </h4>
        <input type="submit" value="enviar" id="botao2"> <!--Botão de enviar-->
    </div> <br>

<?php

    $por1 = isset ($_POST["por1"]) ? floatval($_POST["por1"]) :0;
    $por2 = isset ($_POST["por2"]) ? floatval($_POST["por2"]) :0;
    $num1 = isset ($_POST["num1"]) ? floatval($_POST["num1"]) :0;
    $num2 = isset ($_POST["num2"]) ? floatval($_POST["num2"]) :0;

    if ($por1 != 0 && $por2 != 0 && $num1 == 0  && $num2 == 0) {
    $resultado = ($por1 * $por2) / 100;
    echo "Resultado: $resultado";
    }

    elseif ($num1 != 0 && $num2 != 0 && $por1 == 0 && $por2 == 0 ){
    $resultado1 = ($num1 * 100) / $num2;
    echo "Resultado: $resultado1";
    }

    else {
    echo "Preencha os campos corretamente";
    }

?>

    <div class="conteudo">
        <h3>A porcentagem, representada pelo símbolo "%", é uma medida utilizada para expressar uma proporção ou relação em relação a um todo de 100 partes iguais. É uma maneira de descrever uma parte de algo em relação ao seu todo. A palavra "porcentagem" deriva de "por cento", que significa "por cada cento".   
         </h3>
        <b >Por exemplo, 25% é o mesmo que 25/100, que é igual a 1/4.</b>
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
