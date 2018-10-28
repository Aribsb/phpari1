
<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php

include "conectabd.inc.php";
 $id = $_GET["id"];
 
   
  // lista dos produtos já cadastrados no banco de dados.
  $query = "SELECT pk_produto, nome_produto, quantidade, valor, descricao FROM tab_produto where pk_produto=$id;";
  //echo $query;
  if ($result = mysqli_query($link, $query)) {
	  echo "<table border='1'>";
	  echo "<tr><th>id</th><th>nome_produto</th><th>Quantidade</th><th>Valor</th><th>Descrição</th><th>Ações</th><th> <colspan=\"2\">Ações</th></tr>";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $pk_produto = $row["pk_produto"];
		  $nome_produto = $row["nome_produto"];		  
		  $quantidade = $row["quantidade"];
		  $valor = $row["valor"];		  
		  $descricao = $row["descricao"];
	   }
  }
	   
?>


<html>
	<head>
	  <title>Cadastro de produto</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar produto</h1>
		<form action="alteracao.php" method="POST">
			  
			<input type="hidden" name="id" value="<?php echo $id;?>">
			
			<label for="nome_produto">
			Produto:
			</label>
			<input type="text" name="nome_produto" id="nomeproduto1" value="<?php echo $nome_produto;?>">
			<br>
			
			<label for="quantidad1">
			Quantidade:
			</label>
			<input type="text" name="quantid" id="quantidad1" value="<?php echo $quantidade;?>">
			<br>
					
			
			<label for="valor1">
			Valor:
			</label>
			<input type="text" name="valor" id="valor1" value="<?php echo $valor;?>">
			<br>
			<label>
			Descrição:
			</label>
			<input type="text" name="textarea" id="descricao" value="<?php echo $descricao;?>">
			
			<input type="submit" value="Atualizar">
		</form>
	</body>
</html>