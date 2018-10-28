<?php
  
  $link = mysqli_connect("localhost", "root", "", "bdpifinal");
  mysqli_select_db($link, "bd_pifinal");
  // mysqli_connect_errno - devolve o código do erro
  if (mysqli_connect_errno()) {
	  // mysqli_connect_error - devolve a mensagem de erro
	  printf("Erro ao conectar ao banco de dados: %s<br> ", mysqli_connect_error() );
	  exit();
    }/*else{
		echo"Conexão bem sucedida!";
	}*/
?>