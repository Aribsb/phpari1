<!DOCTYPE html>
<!-- inclusao.php -->
<html>
	<head>
	  <title> Cadastro de produtos - Inclusão </title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do produto informado em cadatro_curso.html

  
  $nome_produto = $_POST["nomeproduto"];  
  $quantidade = $_POST["quantid"];
  $valor = $_POST["valor"];
  $descricao = $_POST["textarea"];
    
  include_once "conectabd.inc.php";
  //A é uma query! ela manda o banco de dados inserir dados na tab_produto  
  $query = "INSERT INTO tab_produto
      (nome_produto, quantidade, valor, descricao) 
	  values ('".$nome_produto."', '".$quantidade."', '".$valor."', '".$descricao."')";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="cadastro.php">Ver Produtos cadastrados</a>
 
 </body>
</html>

