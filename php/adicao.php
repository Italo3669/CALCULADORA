<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/adi.css"/>   <!--referencia a pasta do CSS-->
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
    <h3> adição é uma operação matemática básica que envolve a combinação de dois ou mais números para encontrar o resultado, resultado esse que chamamos de soma. Na adição pode - se somar os valores de qualquer modo, uma vez que a ordem nao afeta o resultado.
    É uma das formas mais primitivas de se usar a matemática, quando se houve a necessidade de integrar um valor ao outro.</h3>
    <b>Para somar usa - se " + ".<br>
    Você faz (valor qualquer) + (valor qualquer) = (soma).<br>
    Exemplo: 7 + 5 = 12.<br></b>  <!--informações da pagina-->

    </div>

    <div>
     <h4>   
        Insira um número: <input type="number" name="adi1" placeholder="+">   <!--caixa de resposta da adição-->
        Insira outro número: <input type="number" name="adi2"><br> <!--caixa de resposta da adição-->
     </h4>
     <input type="submit" value="enviar" id="botão1">  <!--Botão de enviar-->
    </div> 


<div>
    <p id="contato">contato:83 986362762</p>  <!-- contato para suporte-->
    <p id="criador">3P.criação</p>  <!-- nome dos devs -->
</div>

</form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["adi1"];
    $num2 = $_POST["adi2"];
    $resultado = $num1 + $num2;
    echo "Resultado: $resultado";
}
?>