<?php require_once("../BD/db_connect.php");
require_once("validate.php");
if(isset($_POST)){
        $nome =$_POST['nome'];
        $sobrenome =$_POST['sobrenome'];
        $cpf =$_POST['cpf'];
        $email =$_POST['email'];
        $senha =$_POST['senha'];
        $logradouro =$_POST['logradouro'];
        $numero =$_POST['numero'];
        $complemento =$_POST['complemento'];
        $bairro =$_POST['bairro'];
        $cidade =$_POST['cidade'];
        $estado =$_POST['estado'];
        $cep =$_POST['cep'];
        $telefone =$_POST['telefone'];


        $sql = "INSERT INTO usuarios(nome,sobrenome,cpf,email,senha,logradouro,numero,complemento,bairro,cidade,estado,cep,telefone) VALUES ('$nome','$sobrenome','$cpf','$email','$senha','$logradouro','$numero','$complemento','$bairro','$cidade','$estado','$cep','$telefone')";
        if(mysqli_query($connect,$sql)){   
            header('Location:../usuarios.php?sucess');
        }
        else{
            header('Location:../usuarios.php?error');
        }
}
?>