<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/investimento.css"/>   <!--referencia a pasta do CSS-->
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
                <a class="texto" href="../php/porcentagem.php"> Porcentagem</a> <br> <!--Link de navegação para outra página-->
            </div>
        </div>
    </div> 
    


    <h1 id="investimento">INVESTIMENTO</h1>

    <div>   
    <h4 id="inserir">  <!-- tamanho do texto-->
        Valor inicial do investimento: <input type="number" name="valor" id="inserir1" ><br>  <!--valor inicial do juros, c1=caixa entrada-->
        Valor investido por mês: <input type="number" name="cdi" id="inserir2"><br> <!--taxa de juros, c2=caixa entrada-->
        Tempo investido em meses:  <input type="number" name="tempo" id="inserir3" ><br> <!--numero de meses dos juros, c3=caixa entrada-->
    </h4>   <!-- tamanho do texto-->

     <input type="submit" value="Enviar" id="botao1">  <!--Botão de enviar--><br>
    <br>
    </div> 

<?php

    $valor = isset ($_POST["valor"]) ? floatval($_POST["valor"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $cdi = isset ($_POST["cdi"]) ? floatval($_POST["cdi"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $tempo = isset ($_POST["tempo"]) ? floatval($_POST["tempo"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/


    if ($valor != 0 && $cdi != 0 && $tempo != 0) { /*Condição para que não seja efetuado o cálculo em caso de variável vazia*/
    $imposto =  58/100;
    $cdi1 = $valor + ($cdi * $tempo);
    $imposto = $cdi1 * $imposto;
    $resultado = $imposto + $cdi1;

    echo '<div class="resultado">'; /*Faz com que o echo possa ser editado por meio do css*/
    echo "Valor Inicial: $cdi1<br/>"; /*Mostra o resultado obtido por meio do cálculo*/    
    echo "Lucro obtido: $imposto<br/>"; /*Mostra o resultado obtido por meio do cálculo*/
    echo "Valor final investido: $resultado"; /*Mostra o resultado obtido por meio do cálculo*/
    echo '</div>'; 
    }

    else {
        echo '<div class="else">'; /*Faz com que o echo possa ser editado por meio do css*/
        echo "Preencha os campos corretamente"; /*Mensagem que irá aparecer na tela de exibição*/
        echo '</div>';
    }


?>

    <div class="conteudo">
        <h3>Investimento é qualquer valor capar de gerar lucro com prazos curtos, médios e longos.<br> O investimento varia muito dado o objetivo a ser alcançado, seja a curto prazo  para servir como uma<br> reserva de emergência. Seja a médio prazo para uma viajem ou casamento.<br> E até mesmo a longom prazo, como a aposentadoria por exemplo.<br/>
        Deve ser levado em consideração a CDI (taxa de referência de juros no Brasil que é frequentemente usada em investimentos.)<br/>
        A inflação (A inflação afeta o poder de compra do dinheiro ao longo do tempo).<br/>
        Os impostos (Dependendo do tipo de investimento, podem haver impostos a <br>serem pagos sobre os rendimentos.)<br/>
        Prazo de investimento (período pelo qual você deseja manter o investimento é importante para calcular os rendimentos ao longo do tempo).<br/>
        E o principal, que é o valor investido (O valor inicial que você está investindo).<br/>
        <br>
        Eis a fórmula: VF = VI * (1 + CDI - Inflação)^n * (1 - Imposto). <br/>
        <br>
        De modo que: VF (Valor final), VI (Valor inicial), CDI (Taxa de rendimento, em porcentagem),<br/>Inflação (Taxa de inflação, em porcentagem), N (Período do investimento) e Imposto (Taxa sobre o rendimento, em porcentagem).<br/>
        </h3> <!--informações da pagina-->
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


