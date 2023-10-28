<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/sub.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->

    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<body style="background-color:rgb(99, 3, 150)">  <!-- cor na pagina-->

<form action="" method="POST">

    <a href=../index.html> <img src="../img/logoroxo.png" alt="logo calculadora" id="logo"> </a>   <!--nome calculator--> 
    <img src="../img/calculadora.png" alt="calculadora" id="calculadora">   <!--icone da calculadora-->

    <div>
        <p>veja tambem:</p>   <!-- outras funcionalidade do site -->

    </div>
    <h3>A subtração é uma operação matemática fundamental que envolve a retirada ou diminuição de um número de outro número para encontrar a diferença entre eles.  o número do qual você está retirando outro número é chamado de "minuendo" e o número que está sendo retirado é chamado de "subtraendo". O resultado da operação é chamado de “diferença”.
    Com o passar dos tempos criou -se a necessidade de diminuir as quantidades, como por exemplo: quando se matava uma galinha do galinheiro.
    Ou de pagamento de dividas e ainda ficava - se devendo.</h3>
    <b>Para subtrair usa - se " - ".<br>
    Exemplo: 10 galinhas (minuendo) - 1 galinhas (subtraendo) = 9 galinhas (diferença).<br>
    exemplo: eu devo R$ 20,00. Tenho R$ 5,00 (minuendo) - 20 (subtranedo) = -15 (diferença).<br>
     Logo ainda estou devendo R$ -15,00</b>   <!--informações da pagina-->

    </div>

    <div>
     <h4>   
        Insira um número: <input type="number" name="sub1" placeholder="-" id="inserir1">   <!--caixa de resposta da subtração-->
        Insira outro número: <input type="number" name="sub2" id="inserir2"><br> <!--caixa de resposta da subtração-->
     </h4>
     <input type="submit" value="enviar" id="botão1"> <!--Botão de enviar-->
    </div> 


<footer>
    <div class="rodape">
        <div>
            <p id="contato">Contato: 83 986362762</p> <!-- Informações de contato -->
            <p id="criador">3P.criação</p> <!-- Nome dos desenvolvedores -->
        </div>
    </div>
</footer>

</form>

</body>

</html>

<?php

    $sub1 = $_POST["sub1"];
    $sub2 = $_POST["sub2"];
    $resultado = $sub1 - $sub2;

    echo "Resultado: $resultado";

?>