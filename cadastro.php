<?php

include 'config.php';



$nome = $_POST['nome'];
$documento = $_POST['documento'];
$email = $_POST['email'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$uf = $_POST['estado'];
$ativo = $_POST['ativo'];

$recebendoDados = "INSERT INTO `torcedores`('nome', 'documento', 'email', 'ddd', 'telefone', 'cep', 'endereco', 'cidade', 'uf', 'ativo')
VALUES('$nome', '$documento', '$email', '$ddd', '$telefone', '$cep', '$endereco', '$cidade', '$uf', '$ativo')";
$queryCadastro = mysqli_query($conexao, $recebendoDados);


/* $nome = filter_input(INPUT_POST, 'nome');
$documento = filter_input(INPUT_POST, 'documento');
$email = filter_input(INPUT_POST, 'email');
$ddd = filter_input(INPUT_POST, 'ddd');
$telefone = filter_input(INPUT_POST, 'telefone');
$cep = filter_input(INPUT_POST, 'cep');
$endereco = filter_input(INPUT_POST, 'endereco');
$cidade = filter_input(INPUT_POST, 'cidade');
$uf = filter_input(INPUT_POST, 'uf');
$ativo = filter_input(INPUT_POST, 'ativo');

$sql = $pdo->prepare('INSERT INTO torcedores (nome, documento, email, ddd, telefone, cep, endereco, cidade, uf, ativo)
 VALUES (:nome, :documento, :email, :ddd, :telefone, :cep, :endereco, :cidade, :uf, :ativo)');

 $sql->bindValue(':nome', $nome);
 $sql->bindValue(':documento', $documento);
 $sql->bindValue(':email', $email);
 $sql->bindValue(':ddd', $ddd);
 $sql->bindValue(':telefone', $telefone);
 $sql->bindValue(':cep', $cep);
 $sql->bindValue(':endereco', $endereco);
 $sql->bindValue(':cidade', $cidade);
 $sql->bindValue(':uf', $uf);
 $sql->bindValue(':ativo', $ativo);
 $sql->execute(); */


 header('Location: index.php');
?>
