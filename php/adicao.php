<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/adi.css"/>   <!--referencia a pasta do CSS-->   
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"/> <!--favicon icone do navegador-->
    
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

                <a class="texto" href="../php/subtração.php"> Subtração</a> <br> <!--Link de navegação para outra página-->
                <a class="texto" href="../php/porcentagem.php"> Porcentagem</a> <br> <!--Link de navegação para outra página-->
            </div>
        </div>
    </div>

    <h1 id="adicao"> ADIÇÃO</h1>

    <div>
    <h4 id="inserir">   
        Insira um número: <input type="number" name="adi1" step="0.01" id=inserir1><br>   <!--caixa de resposta da adição-->
        Insira um número: <input type="number" name="adi2" step="0.01" placeholder="+" id=inserir2><br> <!--caixa de resposta da adição-->
    </h4>
    <input type="submit" value="Enviar" id="botao1">  <!--Botão de enviar--> 
    <br>
    <br>
    </div>
<?php

    $adi1 = isset ($_POST["adi1"]) ? floatval($_POST["adi1"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    $adi2 = isset ($_POST["adi2"]) ? floatval($_POST["adi2"]) :0; /*Armazena as informações da variável e verifica se nela existe valor*/
    
    
    if ($adi1 != 0 && $adi2 != 0 ){ /*Condição para que não seja efetuado o cálculo em caso de variável vazia*/
        $resultado = $adi1 + $adi2; /*Recebe as duas variáveis e soma elas*/
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
        <h3 id="frase"> Adição é uma operação matemática básica que envolve a combinação</br>
         de dois ou mais números para encontrar o resultado, resultado esse que chamamos de soma.</br> Na adição pode - se somar os valores de qualquer modo, uma vez que a ordem nao afeta o resultado.<br>
        É uma das formas mais primitivas de se usar a matemática,<br> quando se houve a necessidade de integrar um valor ao outro.
        <b>Para somar usa - se " + ".<br>
        Você faz: (valor qualquer) + (valor qualquer) = (soma).<br>
        Exemplo: 7 + 5 = 12.<br></b>  <!--informações da pagina-->
        </h3>
        
        <img src="../img/equacaologo.png" alt="calculadora" id="equacao">   <!--icone da equação-->
    </div>

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