<?php require_once("includes/header.php")?>
<?php require_once("php_action/read.php")?>
<?php require ("login/verifica.php")?>

<?php
//Imprime mensagem de boas vindas
echo "<font face=\"Verdana\" size=2>Bem-Vindo " . $_SESSION["nome_usuario"] . "!<BR>\n";

// Imprime link de logout
echo " | <a href=\"login/sair.php\">Sair do Sistema</a>";

?>


    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Empresas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="usuarios.php">Usuários<span class="sr-only">(current)</span></a>
        </div>
      </div>
    </nav>
    <hr>

       <?php if(isset($_GET['error'])):?>
            <div class="alert alert-danger" role="alert"><?php echo $_GET['error']?>Erro</div>
        <?php endif?>
        <?php if(isset($_GET['sucess'])):?>
            <div class="alert alert-success" role="alert"><?php echo $_GET['sucess']?>Empresa cadastrada com Sucesso</div>
        <?php endif?>
        <?php if(isset($_GET['exclude'])):?>
            <div class="alert alert-success" role="alert"><?php echo $_GET['exclude']?>Excluido com sucesso</div>
        <?php endif?>
         <?php if(isset($_GET['update'])):?>
            <div class="alert alert-success" role="alert"><?php echo $_GET['update']?>Dados atualizados com sucesso</div>
        <?php endif?>
            <h1>Pessoa Jurídica<span class = "label label-default"></span></h1>
            <form name="myForm" action="php_action/create.php" method="POST" onsubmit="alert_js()">
                <input type="hidden" name="action" value="create">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="razao_social">Razão Social</label>
                        <input class="form-control " type="text" name="razao_social" id="razao_social" maxlength="100" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="CNPJ">CNPJ</label>
                        <input class="form-control" type="text" name="cnpj" id="cnpj" maxlength="18" placeholder="00.000.000/0001-00" required>
                    </div>
                </div>
                <!---->
                <div class="form-row">
                    <div class="form-group col-md-3">
                            <label for="logradouro">logradouro</label>
                            <input class="form-control" name="logradouro" type="text" id="logradouro" maxlength="80"required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="numero">Número</label>
                        <input class="form-control" name="numero" type="text" id="numero" maxlength="5"required>
                    </div>  
                     <div class="form-group col-md-3">
                        <label for="complemento">Complemento</label>
                        <input class="form-control" name="complemento" type="text" id="complemento" maxlength="50"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="bairro">Bairro</label>
                        <input class="form-control" name="bairro" type="text" id="bairro" maxlength="20"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cidade">Cidade</label>
                        <input class="form-control" name="cidade" type="text" id="cidade" maxlength="20"required>
                    </div>    
                </div>
                <!---->
                <div class="form-row"> 
                    <div class="form-group col-md-2">
                        <label for="estado">Estado</label>
                        <input class="form-control" name="estado" type="text" id="estado" maxlength="20"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input class="form-control" name="cep" type="text" placeholder="00000-000" id="cep" maxlength="9"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="telefone">Telefone</label>
                        <input class="form-control" name="telefone" type="text" placeholder="(00)00000-0000" id="telefone" maxlength="14"required >
                    </div>
                </div>
                    <button type="submit" value ="submit" class="btn btn-primary">Cadastrar</button>   
        </form>
         <br/>
        <h1>Cadastros<span class = "label label-default"></span></h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th >ID</th>
                    <th>Razao Social</th>
                    <th>CNPJ</th>
                    <th>Logradouro </th>
                    <th>Numero</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($empresas as $key => $value) { ?> <!--Listar os valores do Array(SQL)--> 
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['razao_social'] ?></td>
                        <td><?php echo $value['cnpj'] ?></td>
                        <td><?php echo $value['logradouro'] ?></td>
                        <td><?php echo $value['numero'] ?></td>
                        <td><?php echo $value['complemento'] ?></td>
                        <td><?php echo $value['bairro'] ?></td>
                        <td><?php echo $value['cidade'] ?></td>
                        <td><?php echo $value['estado'] ?></td>
                        <td><?php echo $value['cep'] ?></td>
                        <td><?php echo $value['telefone'] ?></td>
                        <td><a href="php_action/exclude.php?id=<?php echo $value['id']?>"onclick="return exclude_js()">Excluir</a>
                        <a href="index_update.php?id=<?php echo $value['id']?>">Atualizar</a>
                        </td> <!--Passagem de parâmetro via URL-->
                    </tr>
                <?php } ?>
            </tbody>


        </table>
        <hr><!--Fim do Cadastrar-->
        <?php require("includes/footer.php")?>
        