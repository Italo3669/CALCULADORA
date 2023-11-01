<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/sub.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->

    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<body style="background-image: linear-gradient(to right,rgb(167, 121, 18),rgb(0,0,0))">  <!-- cor na pagina-->

<form action="" method="POST">

    <a href=../index.html> <img src="../img/logo.png" alt="logo calculadora" id="logo"> </a>   <!--nome calculator--> 
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
    <div id="footer-content">
        <div id="footer-criador">
            <p>PDV-Prime devs <br>©2023 - <b>PDV - Suporte</b></p>
        </div>
        <div id="footer-redessociais">
            <a href="https://github.com/Italo3669/CALCULADORA"> <img src="img/logogithub.png" alt="github" id="githubp"> </a> <br> <p>Github</p>
        </div>
    </div>
</footer>

</form>

</body>

</html>

<?php

$sub1 = isset ($_POST["sub1"]) ? floatval($_POST["sub1"]) :0;
$sub2 = isset ($_POST["sub2"]) ? floatval($_POST["sub2"]) :0;


if ($sub1 != 0 && $sub2 != 0 ){
    $resultado = $sub1 - $sub2;
echo "Resultado: $resultado";
}

else {
    echo "Preencha os campos corretamente";
}

?>