<?php

// iniciar sessao
session_start();

include('lib/seguranca.php');

// funcao que protege o login
protegeLogin();

// definição de timezone
date_default_timezone_set('America/Sao_Paulo');

$email          = $_SESSION['email'];
$administrador  = $_SESSION['administrador'];

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php include('include/header.php'); ?>
    <title>Cadastro de Usuário</title>
  </head>
  <body>
    
    <div class="container-fluid">

        <?php include('include/navbar.php'); ?>

        <!-- row do formulario de login -->
        <div class="row formulario-login">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Cadastrar Cliente</div>
                    <div class="panel-body">
                        <!-- formulario -->
                        <form method="POST" action="include/cadastrarCliente.php">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                            </div>
                            <div class="form-group">
                                <label>Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Endereço" required>
                            </div>
                            <div class="form-group">
                                <label>Número</label>
                                <input type="number" class="form-control" id="num" name="num" placeholder="Número" required>
                            </div>
                            <div class="form-group">
                                <label>CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>
                            </div>
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
                            </div>
                            <div class="form-group">
                                <label>Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
                            </div>
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="form-control" name="estado" id="estado">
                                  <option value="Nenhum">Nenhum</option>
                                  <option value="Sao Paulo">São Paulo</option>
                                  <option value="Minas Gerais">Minas Gerais</option>
                                  <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </form>
                        <!-- /formulario -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /row do formulario de login -->
    
        <?php include('include/footer.php'); ?>

    </div>

    <!-- Scripts JS -->
    <?php include('include/scripts.php'); ?>
  </body>
</html>