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
$id_usuario = $_GET['id'];

// sql com os nomes identicos do banco de dados
$sql    = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
$stmt   = $PDO->prepare($sql);
$stmt->bindParam(':id_usuario', $id_usuario);
$result = $stmt->execute();

// checa se foi realizada a operacao com o banco de dados
if(!$result){
    header("Location: ../exibirMensagem.php?mensagem=erro-sql&pagina=visualizarUsuario&tipo=danger");
    exit;
}else{
	header("Location: ../exibirMensagem.php?mensagem=ok-deletarUsuario&pagina=visualizarUsuario&tipo=success");
    exit;
}


?>