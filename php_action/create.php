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
    
        $sql = "INSERT INTO empresas(razao_social,cnpj,logradouro,numero,
        complemento,bairro,cidade,estado,cep,telefone) VALUES ('$razao_social','$cnpj','$logradouro','$numero','$complemento','$bairro','$cidade','$estado','$cep','$telefone')";
        if(mysqli_query($connect,$sql)){
            
            header('Location:../index.php?sucess');
        }
        else{
            header('Location:../index.php?error');
        }
}
?>