<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>aula 4 - exemplo 4</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 4 - exemplo 4</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um programa que receba o salário e a quantidade de filhos de um 
funcionário. Com base no valor do salário e na quantidade de filhos, calcule e 
mostre qual será o novo valor do salário que esse funcionário receberá, já incluído 
o valor do auxílio-escola.

[ inferior a R$ 2300,00
Até 2 filhos 50,00 |
 Mais do que 2 filhos 70,00 ]
[ Entre R$ 2300,01 e R$ 
2500,00
Até 2 filhos 40,00 |
Mais do que 2 filhos 60,00 ]
[ Acima de R$ 2500,00
Até 2 filhos 30,00 |
Mais do que 2 filhos 20,00 ]
	</h3>

	<form action="exp4.php" method="post">
		
		<p>
			<label>Informe o salario:</label><br>
			<input type="number" name="salario" min="800" step="0.01">
		</p>

        <p>
		  <label>Quantidade de filhos:</label><br>
		  <input type="number" name="filhos" min="0" required>
        </p>

        <p>
        	<button type="submit" name="enviarExp4">Enviar</button>
        </p>

	</form>

   <?php 

      if(isset($_POST['enviarExp4'])){


       $salario = $_POST['salario'];
       $filhos = $_POST['filhos'];

       // salario <2300
       if ($salario < 2300){

          if($filhos <= 2){ // até dois filhos

           $aux = $filhos * 50; // 50 reais de auxilio  por filho

          }else{ // mais que dois filhos

           $aux = $filhos * 70; // 70 reais de auxilio por filho

          }
      
  
       }else if($salario < 2500){ //salario entre 2300 e 2500

       

            if($filhos <= 2){ // até 2 filhos

            	$aux = $filhos * 40;


            }else{ // mais de 2 filhos

            	$aux = $filhos * 60;


            }



     	}else{ // qualquer valor para salario superior a 2500



             if ($filhos <= 2){ // até 2 filhos

               $aux = $filhos * 30; //30 reais de auxilio por filho

             }else{ // mais de dois filhos

               $aux = $filhos * 20; // 20 reais de auxilio por filho

             }


      	}

      
      $salario_final = $salario + $aux;


      echo "<p>Seu salário base é R\$ $salario, você tem $filhos filhos, portanto, seu auxilio-escola será de $aux, e seu salario final será de R\$ $salario_final</p>";

     }




    ?>



</body>
</html>