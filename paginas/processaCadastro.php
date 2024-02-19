<?php
	include ('conexao.php');
	include('pessoa.class.php');
	$nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];
    $cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	
	$criptografia = MD5($senha);
	
$sql="INSERT INTO cadastro
(nome,email,telefone,cidade,cpf,estado,senha)
VALUES('$nome','$email','$telefone','$cidade','$cpf','$estado','$criptografia')";

if($conn->query($sql)=== true){
	echo "<script language='javascript' type='text/javascript'>
	alert('Cadastro realizado com sucesso!');
	window.location.href='cadastro.php';
	</script>";
	die();
}else{
echo "Erro: ".$sql."<br>".$conn->error;
echo "<br>";
echo "Não foi possivel realizar!";
}
$conn->close();

	
?>