<!DOCTYPE html>
<!-- alteracao.php -->
<html>
	<head>
	  <title>Cadastro de produto - Alteração </title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua alteração do produto informado em form_alteracao.php
include_once "conectabd.inc.php";
  $id = $_POST["id"];
  echo $id;
  $nome_produto = $_POST["nome_produto"];  
  $quantidade = $_POST["quantid"];
  $valor = $_POST["valor"];
  $descricao = $_POST["textarea"];
  
  
  $query = "UPDATE tab_produto 
      SET nome_produto = '$nome_produto',
	      quantidade = '$quantidade',
		  valor = $valor,
		  descricao = '$descricao' 		 
	  WHERE PK_produto = $id;";
	  //echo $query.'<br>';
  if ($result = mysqli_query($link, $query)) {
	  echo "Alteração efetuada com sucesso";
  } else {
	  echo mysqli_error($link);
  }
  
  
  
  // fecha a conexão
  mysqli_close($link);
?> 
 
 <br>
 <a href="cadastro.php">Ver produtos cadastrados</a>
 
 </body>
</html>

