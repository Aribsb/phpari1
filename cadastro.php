<!DOCTYPE html>
<!-- cadastro.php 
     lista os cursos cadastrados -->
<html>
	<head>
	  <title>Cadastro de Produtos </title>
	  <meta charset="utf-8">
	</head>
	<body>

	<?php //cadastro.php
// lista cursos cadastrados  

  include_once "conectabd.inc.php";

  echo "<h1>Produtos Cadastrados</h1>";
  
  // lista dos produtos já cadastrados no banco de dados.
  $query = "SELECT pk_produto, nome_produto, quantidade, valor, descricao FROM tab_produto;";
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
		  
		  echo "<tr>";
		  echo "<td>" . $pk_produto . "</td>";
		  echo "<td>" . $nome_produto . "</td>";		  
		  echo "<td>" . $quantidade . "</td>";
		  echo "<td>" . $valor . "</td>";		  
		  echo "<td>" . $descricao . "</td>";
		  
		  // cria link para EXCLUSAO do respectivo id_produto
		  echo '<td><a href="exclusao.php?id='. $row["pk_produto"] . '">Excluir</a></td>';
		  
		  // cria link para ALTERACAO do respectivo pk_produto
		  echo '<td><a href="form_alteracao.php?id='. $row["pk_produto"] .'">Alterar</a></td>';
		  
		  
		  echo "</tr>";
		  // ou
		  // printf("<tr><td>%s</td><td>%s</td></tr>", $row["id_curso"], $row["ds_curso"] );
	  }
	  echo "</table>";
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }
  // fecha a conexão
  mysqli_close($link);
?>  
	<br>
	<a href="cadastro_produto.html"> Cadastrar novo produto </a>
	</body>
</html>
