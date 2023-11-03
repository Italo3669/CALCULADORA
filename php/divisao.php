<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/divisao.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->  

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
    <h3>A divisão é uma operação matemática fundamental que envolve a distribuição de um número em partes iguais. Usa - se ela para saber   quantas vezes um número (divisor) cabe dentro do outro (dividendo). o resultado da divisão chama - se quociente e pode ser inteiro ou   não. Um número inteiro é quando o dividendo é divisível pelo divisor, resultando sempre em 1.
        Ou também pode gerar valores decimais ou fraccionário.</h3>
      <b>Para dividir usa - se a " / ".<br>
        Exemplo: 27 (divisor) / 9 (dividendo) = 3 (quociente).<br>
        Logo o número 9 cabe três vezes dentro de 27.</b> <!--informações da pagina-->
    </div>

    <div>
     <h4>   
        Insira o divisor: <input type="number" name="div1" placeholder="/" id=inserir1>   <!--caixa de resposta da divisão-->
        Insira o dividendo : <input type="number" name="div2" id=inserir2><br>  <!--caixa de resposta da Divisão-->
     </h4>
     <input type="submit" value="enviar" id="botão1">  <!--Botão de enviar-->
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

    $div1 = isset ($_POST["div1"]) ? floatval($_POST["div1"]) :0;
    $div2 = isset ($_POST["div2"]) ? floatval($_POST["div2"]) :0;
    

    if ($div1 != 0 && $div2 != 0 ){
        $resultado = $div1 / $div2;
    echo "Resultado: $resultado";
    }

    else {
        echo "Preencha os campos corretamente";
    }

?>