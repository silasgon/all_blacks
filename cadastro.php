<?php

include './config.php';

$nome = $_POST['nome'];
$documento = $_POST['documento'];
$email = $_POST['email'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$ativo = $_POST['ativo'];


$recebendoDados = "INSERT INTO torcedores 

VALUES ('$nome', '$documento', '$email', '$ddd', '$telefone', '$cep', '$endereco', '$cidade', '$uf', '$ativo')";

print_r($recebendoDados);

$queryCadastro = mysqli_query($conexao, $recebendoDados); 


/* 
$conn = getConnection();

$nome = filter_input(INPUT_POST, 'nome');
$documento = filter_input(INPUT_POST, 'documento');
$email = filter_input(INPUT_POST, 'email');
$ddd = filter_input(INPUT_POST, 'ddd');
$telefone = filter_input(INPUT_POST, 'telefone');
$cep = filter_input(INPUT_POST, 'cep');
$endereco = filter_input(INPUT_POST, 'endereco');
$cidade = filter_input(INPUT_POST, 'cidade');
$uf = filter_input(INPUT_POST, 'uf');
$ativo = filter_input(INPUT_POST, 'ativo');


$sql = 'INSERT INTO torcedores (nome, documento, email, ddd, telefone, cep, endereco, cidade, uf, ativo)
 VALUES (:nome, :documento, :email, :ddd, :telefone, :cep, :endereco, :cidade, :uf, :ativo)';

 $stmt = $conn->prepare($sql);

 $stmt->bindValue(':nome', $nome);
 $stmt->bindValue(':documento', $documento);
 $stmt->bindValue(':email', $email);
 $stmt->bindValue(':ddd', $ddd);
 $stmt->bindValue(':telefone', $telefone);
 $stmt->bindValue(':cep', $cep);
 $stmt->bindValue(':endereco', $endereco);
 $stmt->bindValue(':cidade', $cidade);
 $stmt->bindValue(':uf', $uf);
 $stmt->bindValue(':ativo', $ativo);

 if($stmt->execute()){
     echo 'Cadastrado com sucesso';
 }else{
     echo 'Erro ao salvar';
 }
 */

// header('Location: index.php');
?>
