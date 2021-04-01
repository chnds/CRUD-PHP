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

        $var_id = $_POST['id'];

        $sql = "UPDATE usuarios SET nome = '$nome',sobrenome = '$sobrenome',cpf = '$cpf',
            email = '$email',senha = '$senha',logradouro = '$logradouro',numero = '$numero',complemento = '$complemento',bairro = '$bairro',cidade = '$cidade',estado = '$estado',cep = '$cep',telefone = '$telefone' WHERE ID=$var_id";

        if(mysqli_query($connect,$sql)){
            header('Location:../usuarios.php?update');
        }
        else{
            header('Location:../usuarios.php?error');
        }
}
?>