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

<body style="background-image: linear-gradient(to right,rgb(167, 121, 18),rgb(0, 0, 0))">  <!-- cor na pagina-->

    <a href=../index.html> <img src="../img/logo.png" alt="logo calculadora" id="logo"> </a>   <!--nome calculator--> 
    <img src="../img/calculadora.png" alt="calculadora" id="calculadora">   <!--icone da calculadora-->

    <div>
        <p>veja tambem:</p>   <!-- outras funcionalidade do site -->

    </div>

    <div>


     <h4>   <!- tamanho do texto->
        Valor inicial:<input type="number" name="v1" id="c1" >  <!--valor inicial do juros, c1=caixa entrada-->
        Taxa de Juros: <input type="number" name="t2" id="c2"> <!--taxa de juros, c2=caixa entrada-->
        N° de meses:  <input type="number" name="n3" id="c3" > <!--numero de meses dos juros, c3=caixa entrada-->
    </h4>   <!-- tamanho do texto-->
        
       <input type="submit" value="enviar" id="botão1" >  <!--Botão de enviar-->
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


    $v1 = isset($_POST['v1']) ? floatval($_POST['v1']) : 0;
    $t2 = isset($_POST['t2']) ? floatval($_POST['t2']) : 0;
    $n3 = isset($_POST['n3']) ? floatval($_POST['n3']) : 0;

    if ($v1 != 0 && $t2 != 0 && $n3 != 0) {
        $taxa = $t2 / 100;
        $resultado = $v1 * $taxa * $n3;
        $total = $v1 + $resultado; 

        echo "Terá $resultado de juros e seu valor final será R$$total";
    } else {
        echo "Preencha todos os campos corretamente.";
    }

?>






