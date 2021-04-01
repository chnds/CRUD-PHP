<?php require_once("includes/header.php")?>
<?php require_once("php_action/get_empresa.php")?>

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
            <div class="alert alert-success" role="alert"><?php echo $_GET['sucess']?>Empresa cadastrada com Sucesso</div>
        <?php endif?>
        <?php if(isset($_GET['exclude'])):?>
            <div class="alert alert-success" role="alert"><?php echo $_GET['exclude']?>Excluido com sucesso</div>
        <?php endif?>
         <?php if(isset($_GET['update'])):?>
            <div class="alert alert-success" role="alert"><?php echo $_GET['update']?>Dados atualizados com sucesso</div>
        <?php endif?>

            <form name="myForm" action="php_action/update.php" method="POST" onsubmit="alert_js()">
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="razao_social">Razão Social</label>
                        <input class="form-control" type="text" name="razao_social" id="razao_social" maxlength="100" value="<?php echo $empresa['razao_social']?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="CNPJ">CNPJ</label>
                        <input class="form-control" type="text" name="cnpj" id="cnpj" maxlength="18" placeholder="00.000.000/0001-00" value="<?php echo $empresa['cnpj']?>" required>
                    </div>
                </div>
                <!---->
                <div class="form-row">
                    <div class="form-group col-md-3">
                            <label for="logradouro">logradouro</label>
                            <input class="form-control" name="logradouro" type="text" id="logradouro" value="<?php echo $empresa['logradouro']?>" maxlength="80"required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="numero">Número</label>
                        <input class="form-control" name="numero" type="text" id="numero" maxlength="5" value="<?php echo $empresa['numero']?>"required>
                    </div>  
                     <div class="form-group col-md-3">
                        <label for="complemento">Complemento</label>
                        <input class="form-control" name="complemento" type="text" id="complemento" maxlength="50" value="<?php echo $empresa['complemento']?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="bairro">Bairro</label>
                        <input class="form-control" name="bairro" type="text" id="bairro" maxlength="20" value="<?php echo $empresa['bairro']?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cidade">Cidade</label>
                        <input class="form-control" name="cidade" type="text" id="cidade" maxlength="20" value="<?php echo $empresa['cidade']?>"required>
                    </div>    
                </div>
                <!---->
                <div class="form-row"> 
                    <div class="form-group col-md-2">
                        <label for="estado">Estado</label>
                        <input class="form-control" name="estado" type="text" id="estado" maxlength="20" value="<?php echo $empresa['estado']?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input class="form-control" name="cep" type="text" placeholder="00000-000" id="cep" maxlength="9" value="<?php echo $empresa['cep']?>"required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="telefone">Telefone</label>
                        <input class="form-control" name="telefone" type="text" placeholder="(00)00000-0000" id="telefone" maxlength="14" value="<?php echo $empresa['telefone']?>"required >
                    </div>
                </div>
                    <a href="index.php" class="btn btn-secundary float-left">Cancelar</a> 
                    <button type="submit" value ="submit" class="btn btn-primary">Atualizar</button>
        </form>
        
        <hr><!--Fim do Cadastrar-->
        <?php require("includes/footer.php")?>
        