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
    <title>Cadastro de cliente</title>
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
                                <label>Nome do cliente</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <label>Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
                            </div>
                            <div class="form-group">
                                <label>Numero</label>
                                <input type="text" class="form-control" id="num" name="num" placeholder="numero">
                            </div>
                            <div class="form-group">
                                <label>Cep</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="cep">
                            </div>
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade">
                            </div>
                            <div class="form-group">
                                <label>Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro">
                            </div>
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="telefone">
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="form-control" name="estado" id="estado">
                                  <option value="Sao Paulo">Sao Paulo</option>
                                  <option value="Rio de Janeiro">Rio de Janeiro</option>
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