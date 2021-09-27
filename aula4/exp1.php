<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 4 - Exemplo 1</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 4 - exemplo 1</h1>

     <!-- incluir um arquivo menu dentro de outro -->
	<?php include_once 'menu.php' ?>
	
     <h3> Faça um algoritmo que leia o nome de uma pessoa e a sua altura. Leve em 
consideração que a altura será lida em centímetros, por exemplo 177 e não 1,77. 
Com base na altura deve ser dada uma mensagem dizendo se a pessoa é de 
estatura “Baixa”, “Média” ou “Alta”. Para isso considere a seguinte tabela:

[ De 1 até 159 cm Baixa ]
[ De 160 a 172 cm Média ]
[ Acima de 172 Alta  ]

    </h3>

    <!-- enviar o form via post para a mesma pagina -->
    <form action="exp1.php" method="post">
    	<p>
    		<label>Nome:</label><br>
    		<input type="text" name="nome" required>
    	</p>

    	<p>
    		<label>Altura (em cm):</label><br>
    		<input type="number" name="altura" required min="1">
    	</p>

    	<p>
    		<button type="submit" name="enviarExp1">Enviar</button>
    	</p>

    </form>


    <?php 

      // verificar se o botão foi acionado via POST

      if(isset($_POST['enviarExp1'])){

        $nome = $_POST['nome'];
        $altura = $_POST['altura'];

        //verificar a altura da pessoa
        //SE altura for maior ou igual a 1 E altura for menor ou igual a 159

        if($altura >= 1 && $altura <= 159){

        	$estatura = "baixa";

        }else if($altura >= 160 && $altura <= 172){
          
          $estatura = "média";

        }else{

        	$estatura = "alta";
        }

        //saida de dados
      echo "<p>$nome, sua estatura é $estatura.</p>";


      }


     ?>
	

</body>
</html>