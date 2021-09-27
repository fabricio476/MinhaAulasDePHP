<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 4 - exemplo 2</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 4 - Exemplo 2</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		 Crie um algoritmo que leia o salário de uma pessoa e com base nesse salário, faça 
o cálculo e imprima o valor do desconto de INSS. Para isso leve em consideração 
a seguinte tabela: 
-Salário Desconto INSS
[ Até 750,00 7% ]
De [ 750,01 até 900,00 8% ]
De [ 900,01 até 1200,00 9% ]
Acima de [ 1200,00 10% ]
	</h3>

	<form action="exp2.php" method="post">

	<p>
		<label>Informe o salário:</label><br>
		<input type="number" name="salario" min="100" required step="0.01">
	</p>


	<p>
		<button type="submit" name="enviarExp2">Enviar</button>
	</p>

    </form>

    <?php 


      if (isset($_POST['enviarExp2'])) {
      	
        $salario = $_POST['salario'];

        if($salario <= 750){

            $inss =	0.07 * $salario; //0.07 = 7%

        }else if ($salario > 750 && $salario <= 900)
        {

        	$inss = 0.08 * $salario;

        }else if ($salario > 900 && $salario <= 1200)
        {

        	$inss = 0.09 * $salario;
        }
        else
        {
        	$inss = 0.10 * $salario;

        }



        echo "<p> O valor do desconto do INSS será de R\$ $inss</p> ";

      }


     ?>


</body>
</html>