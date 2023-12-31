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
                <a class="texto" href="../php/hipoteca.php"> Hipoteca</a> <br> <!--Link de navegação para outra página-->
                <a class="texto" href="../php/investimento.php"> Investimento</a> <br> <!--Link de navegação para outra página-->
            </div>
        </div>
    </div>

    <div>

    <h1 id="jurosc">JUROS COMPOSTO</h1>    

     <h4 id="inserir">   <!-- tamanho do texto-->
        Capital Inicial: <input type="number" name="cap" step="0.01" id="inserir1" ><br>  <!--valor inicial do juros, c1=caixa entrada-->
        Taxa de Juros: <input type="number" name="tax" step="0.01" id="inserir2"><br> <!--taxa de juros, c2=caixa entrada-->
        Tempo definido: <input type="number" name="tem" step="0.01" id="inserir3" ><br> <!--numero de meses dos juros, c3=caixa entrada-->
    </h4>   <!-- tamanho do texto-->

       <input type="submit" value="Enviar" id="botao1">  <!--Botão de enviar--><br>
       <br>
    </div> 

<?php

    $cap = isset ($_POST["cap"]) ? floatval($_POST["cap"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $tax = isset ($_POST["tax"]) ? floatval($_POST["tax"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $tem = isset ($_POST["tem"]) ? floatval($_POST["tem"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/

    if ($cap != 0 && $tax != 0 && $tem != 0 ){ /*Condição para que não seja efetuado o cálculo em caso de variável vazia*/
    $resultado = $cap * ((1 + ($tax/100))**$tem);
    
    echo '<div class="resultado">'; /*Faz com que o echo possa ser editado por meio do css*/  
    $formatted_resultado = number_format($resultado, 2, ',', '.'); /*formata a exibição do resultado*/
    $formatted_cap = number_format($cap, 2, ',', '.'); /*formata a exibição do resultado*/
    echo "Capital inicial: R$ $formatted_cap<br>"; /*Mostra o resultado obtido por meio do cálculo*/
    echo "Montante: R$ $formatted_resultado"; /*Mostra o resultado obtido por meio do cálculo*/
    echo '</div>';
    }

    else {
        echo '<div class="else">'; /*Faz com que o echo possa ser editado por meio do css*/
        echo "Preencha os campos corretamente"; /*Mensagem que irá aparecer na tela de exibição*/
        echo '</div>';

    }
?>

    <div class="containertexto">
        <h3 id="frase">   <!-- tamanho do texto-->
        Juros compostos são uma forma de calcular os juros de um investimento ou empréstimo, em que os juros são aplicados<br>não apenas ao valor inicial, mas também aos juros acumulados ao longo do tempo.
        A principal diferença entre juros  composto e juros simples é:<br/>
        Juros simples: incidem apenas sobre o valor inicial (capital)<br/>
        Juros compostos: incidem sobre o montante total (capital mais juros acumulados).<br/>
        Sua  fórmula é: <b>M = C * (1 + i/100)^t</b>  
        Juros compostos: incidem sobre o montante total (capital mais juros acumulados).<br/>
        M = montante final<br/>
        C = capital<br/>
        i = taxa de juros anual<br/>
        t = tempo em anos
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