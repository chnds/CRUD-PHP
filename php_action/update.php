<?php require_once("../BD/db_connect.php");
require_once("validate.php");
if(isset($_POST)){
        $razao_social =$_POST['razao_social'];
        $cnpj =$_POST['cnpj'];
        $logradouro =$_POST['logradouro'];
        $numero =$_POST['numero'];
        $complemento =$_POST['complemento'];
        $bairro =$_POST['bairro'];
        $cidade =$_POST['cidade'];
        $estado =$_POST['estado'];
        $cep =$_POST['cep'];
        $telefone =$_POST['telefone'];

        $var_id=$_POST['id'];
        
        $sql = "UPDATE empresas SET razao_social = '$razao_social', cnpj = '$cnpj', logradouro = '$logradouro',
            numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', estado = '$estado',
            cep = '$cep', telefone = '$telefone' WHERE id = $var_id";
            
        if(mysqli_query($connect,$sql)){
            header('Location:../index.php?update');
        }
        else{
            header('Location:../index.php?error');
        }
}
?>