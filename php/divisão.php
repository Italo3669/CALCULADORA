<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/div.css"/>   <!--referencia a pasta do CSS-->
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

$div1 = $_POST["div1"];
$div2 = $_POST["div2"];
$resultado = $div1 / $div2;

echo "Resultado: $resultado";

?>