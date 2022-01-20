<?php
	include_once("conexao.php");

	$usuario=$_POST['user'];
	$senha=$_POST['senha'];
	
	$sql1 = "select * from login where nomeusuario='$usuario' and senha='$senha'";
	$resultado1 = @mysqli_query($conect,$sql1);
	$exibe = @mysqli_fetch_row($resultado1);
	
	if ($exibe) {
			echo "Login Efetuado com sucesso              <a href='cadlogin.php'>Voltar</a>";
			exit;
	}else{
			echo "Usuário ou senha não confere            <a href='cadlogin.php'>Voltar</a>";
			exit;
		
	}
?>