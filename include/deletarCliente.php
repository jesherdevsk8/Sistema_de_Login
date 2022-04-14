<?php

// inicia a sessao
session_start();

// importar o arquivo de seguranca
include('../lib/seguranca.php');

// importar o arquivo de conexao com o banco de dados
include('../config/config.php');

// protege o login
protegeLogin();

// recebe o id do usuario que será deletado do banco de dados
$id_cliente = $_GET['id'];

// sql com os nomes identicos do banco de dados
$sql    = "DELETE FROM clientes WHERE id_cliente = :id_cliente";
$stmt   = $PDO->prepare($sql);
$stmt->bindParam(':id_cliente', $id_cliente);
$result = $stmt->execute();

// checa se foi realizada a operacao com o banco de dados
if(!$result){
    header("Location: ../exibirMensagem.php?mensagem=erro-sql&pagina=visualizarCliente&tipo=danger");
    exit;
}else{
	header("Location: ../exibirMensagem.php?mensagem=ok-deletarCliente&pagina=visualizarCliente&tipo=success");
    exit;
}


?>