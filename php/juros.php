<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/jur.css"/>   <!--referencia a pasta do CSS-->
    <link rel="icon"  href="../img/c.png"  type="image/x-icon"> <!--favicon icone do navegador-->
    <title>Calculadora Online</title> <!-- titulo do site -->

</head>

<form action="" method="POST">

<body style="background-color:rgb(99, 3, 150)">  <!-- cor na pagina-->

    <a href=../index.html> <img src="../img/logoroxo.png" alt="logo calculadora" id="logo"> </a>   <!--nome calculator--> 
    <img src="../img/calculadora.png" alt="calculadora" id="calculadora">   <!--icone da calculadora-->

    <div>
        <p>veja tambem:</p>   <!-- outras funcionalidade do site -->

    </div>

    <div>

     <h4>   <!- tamanho do texto->
        Valor inicial:<input type="number" name="v1" id="c1">  <!--valor inicial do juros, c1=caixa entrada-->
        Taxa de Juros: <input type="number" name="t2" id="c2"> <!--taxa de juros, c2=caixa entrada-->
        N° de meses:  <input type="number" name="n3" id="c3"> <!--numero de meses dos juros, c3=caixa entrada-->
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

    $v1 = $_POST["v1"];
    $t2 = ($_POST["t2"]);
    $n3 = $_POST["n3"];
    $taxa = $t2 / 100; 
    $resultado = $v1 * $taxa * $n3;

    if ($v1 == 0 && $t2 == 0 && $n3 == 0) {
    echo "Resultado: $resultado";
    }

    else {
        echo "Preencha todos os campos";
    }

?>

