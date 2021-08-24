<!DOCTYPE html>  <!-- comentario -->
<html lang="pt-br">
<head>
	<meta charset="utf-8"> <!-- para caracteres especiais -->
	<title> Aula 2 - Home</title>

      <!-- tag LINK é para lincar o arquivo css de formatação da pagina -->
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css"> 
</head>
<body>
     
     <!-- parametro CLASS serve para colocar a classe de estilo CSS que foi criada -->
    <h1 class="titulo">Aula 2 - home</h1>

    <!-- aqui vai os codigos PHP -->
    <?php include_once 'menu.php';    //incluir uma vez o arquivo de menu na pagina
     ?>

    
    <!-- tag P - paragrafo / parametro CLASS indicar a classe css de formatação -->
    <p class="texto">Está é a pagina primcipal. <br>
       Utilize o menu para navegar entre as páginas
   </p>

       <p>
       	 Este paragrafo esté recebendo a formatação padrão da pagina.
       </p>


</body>
</html>