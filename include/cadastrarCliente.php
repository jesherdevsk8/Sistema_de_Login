<?php

// inicia a sessao
session_start();

// importar o arquivo de seguranca
include('../lib/seguranca.php');

// importar o arquivo de conexao com o banco de dados
include('../config/config.php');

// protege o login
protegeLogin();

// cria a data atual
$data_atual = date("Y-m-d");

// recebe os dados do formulario
$nome           = $_POST['nome'];
$logradouro     = $_POST['logradouro'];
$numero         = $_POST['num'];
$cep            = $_POST['cep'];
$cidade         = $_POST['cidade'];
$bairro         = $_POST['bairro'];
$telefone       = $_POST['telefone'];
$estado         = $_POST['estado'];

// dados em branco
if($nome == "" ){
    header("Location: ../exibirMensagem.php?mensagem=Cliente-dados-em-branco&pagina=cadastrarCliente&tipo=danger");
    exit;
}

// sql com os nomes identicos do banco de dados
$sql    = "INSERT INTO clientes VALUES (null, :nome, :logradouro, :numero, :cep, :cidade, :bairro, :telefone, :estado)";
$stmt   = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':logradouro', $logradouro);
$stmt->bindParam(':numero', $numero);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':estado', $estado);

$result = $stmt->execute();

// checa se foi realizada a operacao com o banco de dados
if(!$result){
    header("Location: ../exibirMensagem.php?mensagem=erro-sql&pagina=cadastrarCliente&tipo=danger");
    exit;
}else{
    header("Location: ../exibirMensagem.php?mensagem=ok-cadastrarCliente&pagina=area-administrativa&tipo=success");
    exit;
}

?>