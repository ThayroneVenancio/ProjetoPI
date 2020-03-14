<?php
require_once('../banco/conexao.php');

   
if(isset($_POST['nome']) or empty($_POST['senha']) or empty($_POST['cpf'] or empty($_POST['cpf'])==false)){
    echo "<script>
    alert('Nome muito curto');";
    echo "javascript:windows.location='index.php';</script>";

$nome= addslashes($_POST['nome']);
$email= addslashes($_POST['email']);
$senha= md5(addslashes($_POST['senha']));
$celular= addslashes($_POST['celular']);
$telefone= addslashes($_POST['telefone']);
$cpf= addslashes($_POST['cpf']);
$cep= addslashes($_POST['cep']);
$logradouro= addslashes($_POST['logradouro']);
$numero_casa= addslashes($_POST['numero_casa']);
$bairro= addslashes($_POST['bairro']);
$complemento= addslashes($_POST['complemento']);
$estado= addslashes($_POST['estado']);
$cidade= addslashes($_POST['cidade']);


$sql = "INSERT INTO tb_usuario_startup(nome,email,senha,celular,telefone,cpf,cep,logradouro,numero_casa,bairro,complemento,cidade,estado) VALUES ('$nome','$email','$senha','$celular','$telefone','$cpf','$cep','$logradouro','$numero_casa','$bairro','$complemento','$estado','$cidade')";
$pdo->query($sql);

header("Location: menuPrincipal.php");




}else{
  echo 'Preencha todos os campos';
}


?>