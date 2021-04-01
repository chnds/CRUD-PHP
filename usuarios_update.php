<?php require_once("includes/header.php")?>
<?php require_once("php_action_user/get_usuario.php")?>


<?php
// Inicia sessões
session_start();

//Imprime mensagem de boas vindas
echo "<font face=\"Verdana\" size=2>Bem-Vindo " . $_SESSION["nome_usuario"] . "!<BR>\n";

// Imprime link de logout
echo " | <a href=\"login/sair.php\">Sair do Sistema</a>";


?>

    <body>
    <h1>Atualizar informações <span class = "label label-default"></span></h1>
      <?php if(isset($_GET['error'])):?>
        <div class="alert alert-danger" role="alert"><?php echo $_GET['error']?>Erro</div>
    <?php endif?>
    <?php if(isset($_GET['sucess'])):?>
        <div class="alert alert-success" role="alert"><?php echo $_GET['sucess']?>Sucesso</div>
    <?php endif?>
    <?php if(isset($_GET['exclude'])):?>
        <div class="alert alert-success" role="alert"><?php echo $_GET['exclude']?>Excluido com sucesso</div>
    <?php endif?>
     <?php if(isset($_GET['update'])):?>
        <div class="alert alert-success" role="alert"><?php echo $_GET['update']?>Dados atualizados com sucesso</div>
    <?php endif?>

    <form name="myForm" action="php_action_user/update.php" method="POST" onsubmit="alert_js()">
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="nome">Nome</label>
                        <input class="form-control " type="text" name="nome" id="nome" maxlength="20" value="<?php echo $usuarios['nome']?>" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Sobrenome">Sobrenome</label>
                        <input class="form-control" type="text" name="sobrenome" id="sobrenome" maxlength="20" value="<?php echo $usuarios['sobrenome']?>" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="CPF">CPF</label>
                        <input class="form-control" type="text" name="cpf" id="cpf" maxlength="20" autocomplete="off" placeholder="000.000.000-00" value="<?php echo $usuarios['cpf']?>" required>
                    </div>
                    <div class="form-group col-md-3">
                            <label for="Email">Email</label>
                            <input class="form-control" name="email" type="text" id="email" maxlength="80" value="<?php echo $usuarios['email']?>" required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="Senha">Senha</label>
                        <input class="form-control" name="senha" type="text" id="senha" maxlength="11" value="<?php echo $usuarios['senha']?>" required>
                    </div>  
                </div>
                <!---->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="logradouro">Logradouro</label>
                        <input class="form-control" name="logradouro" type="text" id="logradouro" value="<?php echo $usuarios['logradouro']?>" maxlength="20"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Numero">Numero</label>
                        <input class="form-control" name="numero" type="text" id="numero" maxlength="5" value="<?php echo $usuarios['numero']?>" required>
                    </div>    
                     <div class="form-group col-md-2">
                        <label for="estado">Complemento</label>
                        <input class="form-control" name="complemento" type="text" id="complemento" value="<?php echo $usuarios['complemento']?>" maxlength="30"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cep">Bairro</label>
                        <input class="form-control" name="bairro" type="text" id="bairro" maxlength="30" value="<?php echo $usuarios['bairro']?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="telefone">Telefone</label>
                        <input class="form-control" name="telefone" type="text" id="telefone" placeholder ="(00)00000-0000" maxlength="14"required>
                    </div>
                </div>
                <!---->
                <div class="form-row">   
                    <div class="form-group col-md-2">
                        <label for="telefone">Cidade</label>
                        <input class="form-control" name="cidade" type="text" id="cidade" maxlength="11" value="<?php echo $usuarios['cidade']?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="telefone">Estado</label>
                        <input class="form-control" name="estado" type="text" id="estado" maxlength="11" value="<?php echo $usuarios['estado']?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input class="form-control" name="cep" type="text" placeholder="00000-000" id="cep" maxlength="9" value="<?php echo $usuarios['cep']?>" required>
                    </div>
                </div>
                    <a href="usuarios.php" class="btn btn-secundary float-left">Cancelar</a> 
                    <button type="submit" value ="submit" class="btn btn-primary">Atualizar</button>
    </form>
        <hr><!--Fim do Cadastrar-->
        <?php require("includes/footer.php")?>
        