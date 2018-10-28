<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title> - Exclusão </title>
	  <meta charset="utf-8">
	</head>
	<body><?php //exclusao.php
// efetua a exclusão do curso cujo id seja informado.
  $id = $_GET["id"];
  
  include_once "conectabd.inc.php";

  $query = "delete from tab_produto where pk_produto = ".$id;
   mysqli_query($link, $query);
	  echo "Exclusão efetuada com sucesso";
  
  
  // fecha a conexão
  mysqli_close($link);
  
 ?>  
 <br>
 <a href="cadastro.php">Ver cursos cadastrados</a>
 
 </body>
</html>
