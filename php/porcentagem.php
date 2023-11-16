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
                <a class="texto" href="../php/adicao.php"> Adição</a> <br> <!--Link de navegação para outra página-->
                <a class="texto" href="../php/hipoteca.php"> Hipoteca</a> <br> <!--Link de navegação para outra página-->
            </div>
        </div>
    </div>

    <h1 id="por">PORCENTAGEM</h1>

    <div id="inserir">
     <h4>   
         Quanto é: <input type="number" name="por1" placeholder="%" id="inserir1">   <!--caixa de resposta da porcentagem-->
         De: <input type="number" name="por2" id="inserir2"><br> <!--caixa de resposta da porcentagem-->
     </h4>
     <input type="submit" value="enviar" id="botao1"> <!--Botão de enviar-->
    </div> 

    <div id="inserir34">
        <h4>
            o valor: <input type="number" name="num1" id="inserir3">  <!--caixa de resposta da porcetagem-->
            é qual porcentagem de: <input type="number" name="num2" id="inserir4">  <!--caixa de resposta da porcentagem-->
        </h4>
        <input type="submit" value="Enviar" id="botao2"> <!--Botão de enviar-->
    </div> 
    <br>
    <br>

<?php

    $por1 = isset ($_POST["por1"]) ? floatval($_POST["por1"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $por2 = isset ($_POST["por2"]) ? floatval($_POST["por2"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $num1 = isset ($_POST["num1"]) ? floatval($_POST["num1"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $num2 = isset ($_POST["num2"]) ? floatval($_POST["num2"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/

    if ($por1 != 0 && $por2 != 0 && $num1 == 0  && $num2 == 0) { /*Condição para que não seja efetuado o cálculo em caso de variável vazia*/
    $resultado = ($por1 * $por2) / 100;

    echo '<div class="result">'; /*Faz com que o echo possa ser editado por meio do css*/
    echo "Resultado: $resultado"; /*Mostra o resultado obtido por meio do cálculo*/
    echo '</div>';
    }

    elseif ($num1 != 0 && $num2 != 0 && $por1 == 0 && $por2 == 0 ){ /*Condição para que não seja efetuado o cálculo em caso de variável vazia*/
    $resultado1 = ($num1 * 100) / $num2; /*Mostra o resultado obtido por meio do cálculo*/

    echo '<div class="resultado1">'; /*Faz com que o echo possa ser editado por meio do css*/
    echo "Resultado: $resultado1%"; /*Mostra o resultado obtido por meio do cálculo*/
    echo '</div>';
    }

    else {
        echo '<div class="else">'; /*Faz com que o echo possa ser editado por meio do css*/
        echo "Preencha os campos corretamente"; /*Mensagem que irá aparecer na tela de exibição*/
        echo '</div>';

    }

?>

    <div class="containertexto">
        <h3 id="frase"><b>A porcentagem, representada pelo símbolo "%", é uma medida utilizada para expressar uma proporção ou relação em relação a um todo de 100 partes iguais. É uma maneira de descrever uma parte de algo em relação ao seu todo. A palavra "porcentagem" deriva de "por cento", que significa "por cada cento".
        Por exemplo, 25% é o mesmo que 25/100, que é igual a 1/4.</b>
        </h3>
    </div>

    <img src="../img/equacaologo.png" alt="calculadora" id="equacao">   <!--icone da equação-->

    <div class="containerrodape">
    <footer> <!-- Rodapé -->
        <div id="footer-content"> <!-- Conteúdo do rodapé -->
            <div id="footer-criador"> <!-- Separação do conteúdo (Criadores) -->
                <p>PDV-Prime devs <br>©2023 - <b>PDV - Suporte</b></p>
            </div>
            <div id="footer-redessociais"> <!-- Separação do conteúdo (Redes Sociais) -->
                <a href="https://github.com/Italo3669/CALCULADORA"> <img src="../img/github.png" alt="github" id="githubp"> </a>
            </div>
        </div> <!-- Fechamento do Conteúdo do rodapé-->
    </footer> <!-- Fechamento do Rodapé -->
    </div>

</form>

</body>

</html>
