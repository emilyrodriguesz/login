<?php
	include_once("conexao.php");

	$usuario=$_POST['user'];
	$senha=$_POST['senha'];
	
	$sql1 = "select * from login where nomeusuario='$usuario'";
	$resultado1 = @mysqli_query($conect,$sql1);
	$exibe = @mysqli_fetch_row($resultado1);
	
	if ($exibe) {
			echo "Usuário já cadastrado                   <a href='cadlogin.php'>Voltar</a>";
			exit;
	}
	
	$sql = "insert into login (nomeusuario,senha) values ('$usuario','$senha')";
	$resultado = @mysqli_query($conect,$sql);
	
	if (!$resultado){
		die ('Query Inválida: ' . @mysqli_error($conect));
	}else{
		mysqli_close($conect);
		echo "Registro Cadastrado com Sucesso!             <a href='cadlogin.php'>Voltar</a>";
	}
	
?>