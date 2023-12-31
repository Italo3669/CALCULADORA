<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/divisao.css"/>   <!--referencia a pasta do CSS-->
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
                <a class="texto" href="../php/multiplicação.php"> Multiplicação</a> <br> <!--Link de navegação para outra página-->
                <a class="texto" href="../php/subtração.php"> Subtração</a> <br> <!--Link de navegação para outra página-->
            </div>
        </div>
    </div> 

        <h1 id="divisao">DIVISÃO</h1>
     
        <h4 id="inserir">   
        Insira um número: <input type="number" name="div1" step="0.01" id=inserir1><br>   <!--caixa de resposta da divisão-->
        Insira um número: <input type="number" name="div2" step="0.01" placeholder="/" id=inserir2><br>  <!--caixa de resposta da Divisão-->
     </h4>
     <input type="submit" value="Enviar" id="botao1">  <!--Botão de enviar--><br>
     <br>

<?php

    $div1 = isset ($_POST["div1"]) ? floatval($_POST["div1"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $div2 = isset ($_POST["div2"]) ? floatval($_POST["div2"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    

    if ($div1 != 0 && $div2 != 0 ){ /*Condição para que não seja efetuado o cálculo em caso de variável vazia*/
        $resultado = $div1 / $div2; /*Recebe as duas variáveis e divide elas*/
        echo '<div class="resultado">'; /*Faz com que o echo possa ser editado por meio do css*/
        echo "Resultado: $resultado"; /*Mostra o resultado obtido por meio do cálculo*/
        echo '</div>';
    }

    else {
        echo '<div class="else">'; /*Faz com que o echo possa ser editado por meio do css*/
        echo "Preencha os campos corretamente"; /*Mensagem que irá aparecer na tela de exibição*/
        echo '</div>';
    }

?>

    <div class="containertexto">
        <h3 id="frase">A divisão é uma operação matemática fundamental que envolve a distribuição de um número em partes iguais.<br>
         Usa - se ela para saber   quantas vezes um número (divisor) cabe dentro do outro (dividendo).<br>
        o resultado da divisão chama - se quociente e pode ser inteiro ou   não.<br>
         Um número inteiro é quando o dividendo é divisível pelo divisor, resultando sempre em 1.<br>
        Ou também pode gerar valores decimais ou fraccionário.
        <b>Para dividir usa - se a " / ".<br>
        Exemplo: 27 (divisor) / 9 (dividendo) = 3 (quociente).<br>
        Logo o número 9 cabe três vezes dentro de 27.</b> <!--informações da pagina-->
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
