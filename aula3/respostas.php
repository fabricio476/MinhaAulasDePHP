<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 3 - Respostas</title>

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

  <!-- esta pagina só aparecera quando ser redirecionada por outra pagina -->
	<h1>Aula 3 - Respostas</h1>

	<?php include_once "menu.php" ?>
  

	<h2>Esta página exibe apenas as respostas dos exercícios</h2>

     <!-- indicar que é um codigo php -->
	<?php 

     //vereificar se o formulario que contem o BOTÃO "enviarEx1" foi enviado

     // estrutura IF em PHP
	//se o botão ENVIAR com o nome (enviarEX1 for true) foi apertado via metodo POST execute a ação.
	//a variavel "enviarEx1" é o nome do BOTÃO do formulario da pagina ex1 
	if (isset($_POST['enviarEx1']))
	{
     
     // receber os dados do formulario do Exercicio 1
         
        //a variavel criada $nome vai receber a variavel enviada via POST[] ( "nome" (a variavel nome é o nome do INPUT nome da pagina ex1))
		$nome = $_POST['nome'];

		$salario = $_POST['salario'];

		$percentual = $_POST['percentual'];



		//processamento
		$percentual_decimal = $percentual/100; //para saber a porcentagem que vai ser calculado (trasnsforma em 0.0)

		$aumento = $percentual_decimal * $salario; //saber o valor que da porcentagem referente ao salario

		$salario_final = $salario + $aumento; // soma o salario com o volar pencentual que foi calculado em cima do salario

           
        // comando de printar na tela
		echo "<h3> $nome, seu salário atual é R\$ $salario, você recebeu $percentual % de aumento (R\$ $aumento), e seu salário final é R\$ $salario_final </h3>";

	}

	 ?>

</body>
</html>