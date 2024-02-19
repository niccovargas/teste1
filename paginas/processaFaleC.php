<?php
	include ('conexao.php');
	include('pessoa.class.php');
	$nome = $_POST['nome'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];
    $confirmaemail = $_POST['confirmaemail'];
    $telefone = $_POST['telefone'];
    $modalidade = $_POST['modalidade'];
    $cpf = $_POST['cpf'];
    $assunto = $_POST['assunto'];


	$a = new Pessoa();
	$a->setnome($nome);
	$a->setemail($email);
	$a->setconfirmaemail($confirmaemail);
	$a->settelefone($telefone);
    $a->setcidade($cidade);
    $a->setestado($estado);
	$a->setmodalidade($modalidade);
	$a->setcpf($cpf);
	$a->setmsg($msg);
	$a->setassunto($assunto);
	
	
$sql="INSERT INTO faleconosco
(nome,estado,cidade,email,confirmaemail,telefone,modalidade,cpf,mensagem,assunto)
VALUES('".$a->getnome()."',
	'".$a->getestado()."',
	'".$a->getcidade()."',
	'".$a->getemail()."',
	'".$a->getconfirmaemail()."',
    '".$a->gettelefone()."',
	'".$a->getmodalidade()."',
	'".$a->getcpf()."',
	'".$a->getmsg()."',
	'".$a->getassunto()."')";

if($conn->query($sql)=== true){
	echo "<script language='javascript' type='text/javascript'>
	alert('Cadastro realizado com sucesso!');
	window.location.href='../index.php';
	</script>";
	die();
}else{
echo "Erro: ".$sql."<br>".$conn->error;
echo "<br>";
echo "Não foi possivel realizar!";
}
$conn->close();

	
?>