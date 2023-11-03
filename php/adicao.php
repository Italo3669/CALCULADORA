<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/adi.css"/>   <!--referencia a pasta do CSS-->   
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"/> <!--favicon icone do navegador-->

    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<body style="background-image: linear-gradient(to right,rgb(167, 121, 18),rgb(0, 0, 0))">  <!-- cor na pagina-->

<form action="" method="POST">

   <div class="cabeçalho2">
    <a href=../index.html> <img src="../img/logo.png" alt="logo calculadora" id="logo2"> </a>   <!--nome calculator--> 
   </div>  
    <img src="../img/calculadora.png" alt="calculadora" id="calculadora">   <!--icone da calculadora-->

    <div>
        <p>veja tambem:</p>   <!-- outras funcionalidade do site -->

    </div>
    <h3> adição é uma operação matemática básica que envolve a combinação de dois ou mais números para encontrar o resultado, resultado esse que chamamos de soma. Na adição pode - se somar os valores de qualquer modo, uma vez que a ordem nao afeta o resultado.
    É uma das formas mais primitivas de se usar a matemática, quando se houve a necessidade de integrar um valor ao outro.</h3>
    <b>Para somar usa - se " + ".<br>
    Você faz: (valor qualquer) + (valor qualquer) = (soma).<br>
    Exemplo: 7 + 5 = 12.<br></b>  <!--informações da pagina-->

    </div>

    <div>
     <h4>   
        Insira um número: <input type="number" name="adi1" placeholder="+" id=inserir1>   <!--caixa de resposta da adição-->
        Insira outro número: <input type="number" name="adi2" id=inserir2><br> <!--caixa de resposta da adição-->
     </h4>
     <input type="submit" value="enviar" id="botao1">  <!--Botão de enviar-->
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
    $adi1 = isset ($_POST["adi1"]) ? floatval($_POST["adi1"]) :0;
    $adi2 = isset ($_POST["adi2"]) ? floatval($_POST["adi2"]) :0;
    

    if ($adi1 != 0 && $adi2 != 0 ){
        $resultado = $adi1 + $adi2;
    echo "Resultado: $resultado";
    }

    else {
        echo "Preencha os campos corretamente";
    }
?>