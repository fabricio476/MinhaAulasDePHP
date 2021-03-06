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

           
      echo "<h3>Resposta Ex 01:</h3>";

        // comando de printar na tela
		echo "<h3> $nome, seu salário atual é R\$ $salario, você recebeu $percentual % de aumento (R\$ $aumento), e seu salário final é R\$ $salario_final </h3>";
	}



   // verificar se o formulario que contem o botão enviarEx2 foi enviado
	if (isset($_GET['enviarEx2'])){

     
  $largura = $_GET['largura'];
  $altura = $_GET['altura'];
  $comprimento = $_GET['comprimento'];


  //processamneto
  $volume = $largura * $altura * $comprimento;

  $volume = number_format($volume, 1); //formatar variavel para conter uma casa decimal

   echo "<h3>Resposta Exercício 02:</h3>";

   echo "<h3>Volume da caixa (1 x A x C = $largura x $altura x $comprimento) = $volume cm³";


	}


   //verificar se o formulario que contem o botão enviarEx3 foi enviado

	if(isset($_POST['enviarEx3'])){
   
   $ano = $_POST['anoNasc'];

   $ano_atual = date("Y");  //armazena ano atual

   $idade = $ano_atual - $ano; // calcula da idade

   echo "<h3>Resposta do exercício 03:</h3>";

   echo "<h3>Sua idade em $ano_atual é/será $idade anos</h3>";


	}


	if (isset($_POST['enviarEx5'])) {

		$bim1 = $_POST['bim1'];
		$bim2 = $_POST['bim2'];
		$bim3 = $_POST['bim3'];
		$bim4 = $_POST['bim4'];

		$media = ($bim1 + $bim2 + $bim3 + $bim4) / 4;

		$media = number_format($media, 1);

		echo "<h3>Resposta do exercício 05:</h3>";

		echo "<h3>Sua média final é: $media</h3>";


	}




	 ?>

</body>
</html>